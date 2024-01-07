<?php

namespace Modules\Order\Http\Controllers\api\Provider;

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
    public function pricedefinelist(){
        $orders = QueryBuilder::for(Order::class)
        ->where('provider_id', '=', Auth()->user()->id)
        ->where('price', '=', null)
        ->select(['id','mobile', 'address'])
        ->defaultSort('-id')
        ->paginate(10);
        return $orders;
    }

    public function pricedefineitem($id){
        $order = QueryBuilder::for(Order::class)
        ->where('id', '=', $id)
        ->where('provider_id','=',Auth()->user()->id)
        ->select(['id','mobile', 'address'])
        ->first();

        return $order;
    }

    public function pricedefine(Request $request){
        $validatedData = $request->validate([
            'order_id' => ['required'],
            'price' => ['required'],
        ]);

        $order = Order::findOrFail($request->order_id);
        if (Auth()->user()->id != $order->provider_id) {
            abort(403);
        }
        $order->price = $validatedData['price'];
        $order->status = 2;
        $order->save();
        Factor::create([
            'user_id' => Auth()->user()->id,
            'amount' => $order->price * 0.15,
            'order_id' => $order->id
        ]);
        return ['status'=>1];
    }

    public function ordersHistory()
    {
        $orders = QueryBuilder::for(Order::class)
        ->where('provider_id', '=', Auth()->user()->id)
        ->select(['id','user_id','mobile','city_name', 'address','price','status'])
        ->defaultSort('-id')
        ->paginate(10);

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

        return $orders;
    }
}
