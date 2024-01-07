<?php

namespace Modules\Order\Http\Controllers\api\Operator;

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
public function waitingOrders(){
    $orders = QueryBuilder::for(Order::class)
    ->where('provider_id', '=', null)
    ->join('users','orders.user_id','users.id')
    ->join('services','orders.service_id','services.id')
    ->select(['orders.id','orders.mobile', 'orders.address','orders.city_name','orders.state_name','users.first_name as last_name', 'users.last_name as first_name','services.name as service_name'])
    ->defaultSort('-id')
    ->paginate(10);

    return $orders;

}
public function waitingOrderItem($id)
{

    $order = QueryBuilder::for(Order::class)
    ->where('orders.id', '=', $id)
    ->select(['orders.address','orders.mobile', 'orders.state_name','orders.city_name','users.first_name as first_name', 'users.last_name as last_name','services.name as service_name'])
    ->join('users','orders.user_id','users.id')
    ->join('services','orders.service_id','services.id')
    ->first();
    return $order;
}
public function availableProviders($id){
    $order = Order::findOrFail($id);

    $query = User::role('service provider')
    ->join('providerprofiles', 'users.id', '=', 'providerprofiles.user_id')
    ->join('services', 'providerprofiles.service_id', '=', 'services.id')
    ->where('providerprofiles.city_id', '=', $order->city_id)
    ->where('providerprofiles.service_id', '=', $order->service_id)
    ->select('users.*', 'providerprofiles.*', 'users.id as id', 'services.name as service_name',  'providerprofiles.name as providerprofilename');

    $providers = QueryBuilder::for($query)
    ->select('users.id','first_name','last_name','mobile','city_name','state_name','start_time','end_time','services.name as service_name')
    ->paginate(10);

    return $providers;

}
public function assignProviderToOrder(Request $request){

    $validatedData = $request->validate([
        'provider_id' => ['required'],
        'order_id' => ['required'],
    ]);

    $provider = User::findOrFail($request->provider_id);
    $order = Order::findOrFail($request->order_id);
    $customer = User::findOrFail($order->user_id);
    if ($order->provider_id == null) {
        $order->provider_id = $provider->id;
        $order->status = 1;
        $order->operator_id = Auth()->user()->id;
        $order->save();

        if (env("SMS_ACTIVE")) {
            $customer_message = "مشتری گرامی خدمت رسان شما ";
            $customer_message += $provider->first_name;
            $customer_message += " ";
            $customer_message += $provider->last_name;
            $customer_message += " با شماره ";
            $customer_message += $provider->mobile;
            $customer_message += " می باشد. caratamir.ir";

            $provider_message = "خدمت رسان گرامی مشتری شما ";
            $provider_message += $customer->first_name;
            $provider_message += " ";
            $provider_message += $customer->last_name;
            $provider_message += " با شماره ";
            $provider_message += $order->mobile;
            $provider_message += " می باشد. caratamir.ir";

            RayganSms::sendMessage($order->mobile, $customer_message);
            RayganSms::sendMessage($provider->mobile, $provider_message);
        }
        return ['status'=>1];
    } else {
        abort(404);
    }

}
}