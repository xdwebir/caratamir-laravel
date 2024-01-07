<?php

namespace Modules\Payment\Http\Controllers\API\Accountant;

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
    public function confirmPaymentList()
    {

        $payments = QueryBuilder::for(Payment::class)
            ->where('status', '=', '0')
            ->select(['id', 'user_id', 'date', 'tracking_code', 'amount'])
            ->defaultSort('-id')
            ->paginate(10);
        return $payments;
    }

    public function getPayment($id)
    {
        $pay = QueryBuilder::for(Payment::class)
            ->where('id', '=', $id)
            ->select(['id', 'user_id', 'date', 'tracking_code', 'amount'])
            ->first();
        return $pay;
    }
    public function getUserPayments($id)
    {
        $payments = QueryBuilder::for(Payment::class)
            ->where('user_id', '=', $id)
            ->where('status', '=', 1)
            ->select(['id', 'user_id', 'date', 'tracking_code', 'amount'])
            ->defaultSort('-id')
            ->paginate(10);
        return $payments;
    }

    public function confirmPayment($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->accountant_id = Auth()->user()->id;
        $payment->status = 1;
        $payment->save();
        return ['status' => 1];
    }

    public function deletePayment($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->accountant_id = Auth()->user()->id;
        $payment->status = 2;
        $payment->save();
        return ['status' => 1];
    }

    public function paymentsHistory()
    {
        $payments = QueryBuilder::for(Payment::class)
            ->where('accountant_id', '=', Auth()->user()->id)
            ->select('id', 'user_id', 'date', 'tracking_code', 'status', 'amount')
            ->defaultSort('-id')
            ->paginate(10);
            
        foreach ($payments as $payment) {
            if ($payment->status == 0) {
                $payment->status = "در انتظار تایید";
            } elseif ($payment->status == 1) {
                $payment->status = "تایید شده";
            } else {
                $payment->status = "حذف";
            }
        }

        return $payments;
    }
}
