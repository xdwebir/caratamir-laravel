<?php

namespace Modules\Order\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Modules\Factor\Models\Factor;
use Modules\Order\Models\Order;
use Modules\Service\Models\Service;
use Trez\RayganSms\Facades\RayganSms;

class OrdersController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Orders';

        // module name
        $this->module_name = 'orders';

        // directory path of the module
        $this->module_path = 'order::frontend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Order\Models\Order";
    }


    public function create()
    {
        $services = Service::all();
        return view('order::frontend.orders.customer.create', ['services' => $services]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'city_id' => ['required'],
            'city_name' => ['required'],
            'state_name' => ['required'],
            'state_id' => ['required'],
            'mobile' => ['required'],
            'address' => ['required'],
            'service_id' => ['required'],
        ]);

        $validatedData['user_id'] = Auth()->user()->id;
        $order = Order::create($validatedData);
        Flash::success("<i class='fas fa-check'></i> یک سفارش جدید با آیدی  '" . Str::singular($order->id) . "' ساخته شد")->important();
        if(env("SMS_ACTIVE")){
            RayganSms::sendMessage(env("SMS_MOBILE"), "کارمند گرامی کاراتعمیر شما یک سفارش دریافت کرده اید");
        }

        return redirect()->back();
    }
    public function waitinglist()
    {

        $orders = Order::all()->where('provider_id', '=', null);

        return view('order::frontend.orders.operator.waitinglist', ['orders' => $orders]);
    }


    public function confirmorder($id)
    {
        $order = Order::where('orders.id', '=', $id)
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('users.*', 'orders.*', 'orders.mobile as mobile')
            ->first();
        if ($order->provider_id != null) {
            abort(404);
        }

        $providers = User::role('service provider')
            ->join('providerprofiles', 'users.id', '=', 'providerprofiles.user_id')
            ->join('services', 'providerprofiles.service_id', '=', 'services.id')
            ->where('providerprofiles.city_id', '=', $order->city_id)
            ->where('providerprofiles.service_id', '=', $order->service_id)
            ->select('users.*', 'providerprofiles.*', 'users.id as id', 'services.name as servicename',  'providerprofiles.name as providerprofilename')
            ->get();

        $service = Service::where('id', '=', $order->service_id)->firstOrFail();
        $order->servicename = $service->name;

        return view('order::frontend.orders.operator.confirmorder', ['order' => $order, 'providers' => $providers]);
    }
    public function addprovider($order_id, $provider_id)
    {
        $provider = User::findOrFail($provider_id);
        $order = Order::findOrFail($order_id);

        if ($order->provider_id == null) {
            $order->provider_id = $provider->id;
            $order->status = 1;
            $order->operator_id = Auth()->user()->id;
            $order->save();
            Flash::success("خدمت رسان با موفقیت اختصاص یافت")->important();
            return $this->waitinglist();
        } else {
            abort(404);
        }
    }
    public function pricedefinelist()
    {
        $orders = Order::where('provider_id', '=', Auth()->user()->id)
            ->where('price', '=', null)
            ->get();
        return view('order::frontend.orders.provider.pricedefinelist', ['orders' => $orders]);
    }
    public function pricedefine($order_id)
    {
        $order = Order::findOrFail($order_id);
        return view('order::frontend.orders.provider.pricedefine', ['order' => $order]);
    }
    public function setprice($order_id, Request $request)
    {
        $order = Order::findOrFail($order_id);
        if (Auth()->user()->id != $order->provider_id) {
            abort(403);
        }
        $validatedData = $request->validate([
            'price' => ['required'],
        ]);

        $order->price = $validatedData['price'];
        $order->status = 2;
        $order->save();
        Factor::create([
            'user_id' => Auth()->user()->id,
            'amount' => $order->price * 0.15,
            'order_id' => $order->id
        ]);
        return $this->pricedefinelist();
    }
    public function providerorderhistory()
    {
        $orders = Order::where('provider_id', '=', Auth()->user()->id)->get();
        foreach ($orders as $order) {
            if ($order->status == 0) {
                $order->status = "در انتظار خدمت رسان";
            } elseif ($order->status == 1) {
                $order->status = "در حال خدمت رسانی";
            } elseif ($order->status == 2) {
                $order->status = "پایان خدمت رسانی";
            } else {
                $order->status = "حذف شده";
            }
        }
        return view('order::frontend.orders.provider.orderhistory', ['orders' => $orders]);
    }
    public function operatororderhistory()
    {
        $orders = Order::where('operator_id', '=', Auth()->user()->id)
            ->join('services', 'orders.service_id', '=', 'services.id')
            ->join('users', 'orders.provider_id', '=', 'users.id')
            ->select('orders.*', 'services.name as servicename', 'users.mobile as providermobile')
            ->orderBy('orders.id', 'desc')
            ->simplePaginate(10);

        foreach ($orders as $order) {
            if ($order->status == 0) {
                $order->status = "در انتظار خدمت رسان";
            } elseif ($order->status == 1) {
                $order->status = "در حال خدمت رسانی";
            } elseif ($order->status == 2) {
                $order->status = "پایان خدمت رسانی";
            } else {
                $order->status = "حذف شده";
            }
        }
        return view('order::frontend.orders.operator.orderhistory', ['orders' => $orders]);
    }

    public function customerorderhistory()
    {
        $orders = Order::where('user_id', '=', Auth()->user()->id)
            ->orderBy('id', 'desc')
            ->simplePaginate(10);

        foreach ($orders as $order) {
            if ($order->status == 0) {
                $order->status = "در انتظار خدمت رسان";
            } elseif ($order->status == 1) {
                $order->status = "در حال خدمت رسانی";
            } elseif ($order->status == 2) {
                $order->status = "پایان خدمت رسانی";
            } else {
                $order->status = "حذف شده";
            }
        }
        return view('order::frontend.orders.provider.orderhistory', ['orders' => $orders]);
    }
}
