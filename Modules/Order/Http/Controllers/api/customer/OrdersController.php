<?php

namespace Modules\Order\Http\Controllers\api\customer;

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
use Spatie\QueryBuilder\QueryBuilder;

class OrdersController extends Controller
{



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
        if (env("SMS_ACTIVE")) {
            RayganSms::sendMessage(env("SMS_MOBILE"), "کارمند گرامی کاراتعمیر شما یک سفارش دریافت کرده اید");
        }

        return ['status' => 1];
    }

    public function all()
    {


        $orders = QueryBuilder::for(Order::class)
            ->where('orders.user_id', '=', Auth()->user()->id)
            ->select(['orders.id as id','orders.mobile as mobile', 'orders.address as address','orders.status as status','orders.price as price','services.name as service_name'])
            ->join("services","orders.service_id","services.id")
            // ->join("providerprofiles", "orders.provider_id", "providerprofiles.user_id")
            // ->join("users","providerprofiles.user_id","users.id")
            ->defaultSort('-id')
            ->paginate(10);

        foreach ($orders as $order) {
            if ($order->status == 0) {
                $order->status = "در انتظار خدمت رسان";
            } elseif ($order->status == 1) {
                $order->status = "در حال خدمت رسانی";
            } elseif ($order->status == 2) {
                $order->status = "پایان خدمت رسانی";
            } elseif ($order->status == 3) {
                $order->status = "حذف شده";
            } else {
                $order->status = "نامشخص";
            }
        }

        return $orders;
    }
}
