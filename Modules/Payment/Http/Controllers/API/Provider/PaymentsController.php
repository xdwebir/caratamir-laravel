<?php

namespace Modules\Payment\Http\Controllers\API\Provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Modules\Payment\Models\Payment;
use Spatie\QueryBuilder\QueryBuilder;

class PaymentsController extends Controller
{
   public function addPayment(Request $request){
    $validatedData = $request->validate([
        'date' => ['required'],
        'tracking_code' => ['required'],
        'amount' => ['required'],
    ]);

    Payment::create([
        'date'=> $validatedData['date'],
        'tracking_code'=> $validatedData['tracking_code'],
        'amount'=> $validatedData['amount'],
        'user_id'=> Auth()->user()->id
    ]);
    return ["status"=>1];
   }

   public function paymentsHistory(){

    $payments = QueryBuilder::for(Payment::class)
    ->where('user_id', '=', Auth()->user()->id)
    ->select(['id', 'status', 'date', 'tracking_code', 'amount'])
    ->defaultSort('-id')
    ->paginate(10);

    foreach($payments as $payment){
        if($payment->status == 0){
            $payment->status = "در انتظار تایید";
        }elseif($payment->status == 1){
            $payment->status = "تایید شده";
        }else{
            $payment->status = "حذف";
        }
    }

    return $payments;
   }
}
