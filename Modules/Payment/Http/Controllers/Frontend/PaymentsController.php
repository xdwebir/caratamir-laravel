<?php

namespace Modules\Payment\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use Modules\Payment\Models\Payment;
class PaymentsController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Payments';

        // module name
        $this->module_name = 'payments';

        // directory path of the module
        $this->module_path = 'payment::frontend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Payment\Models\Payment";
    }

    public function create(){
        return view('payment::frontend.payments.create');
    }
    public function store(Request $request){
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
        Flash::success("فیش پرداختی شما ثبت شد و پس از تایید اعمال خواهد شد")->important();
        return redirect()->back();
    }

    public function confirmlist(){

        $payments = Payment::where('status' ,'=', '0')->get();
        return view('payment::frontend.payments.confirm-list',['payments'=>$payments]);
    }

    public function confirm($id)
    {
        $pay = Payment::findOrFail($id);
        $payments = Payment::where('user_id','=',$pay->user_id)
        ->where('status','=',1)
        ->get();
        return view('payment::frontend.payments.confirm',['pay'=>$pay,'payments'=>$payments]);
    }
    public function confirmed($id){
        $payment = Payment::findOrFail($id);
        $payment->status = 1;
        $payment->save();
        return $this->confirmlist();
    }
    public function deleted($id){
        $payment = Payment::findOrFail($id);
        $payment->status = 2;
        $payment->save();
        return $this->confirmlist();
    }
    public function paymenthistory(){
        $payments = Payment::where('user_id','=',Auth()->user()->id)->get();
        foreach($payments as $payment){
            if($payment->status == 0){
                $payment->status = "در انتظار تایید";
            }elseif($payment->status == 1){
                $payment->status = "تایید شده";
            }else{
                $payment->status = "حذف";
            }
        }

        $sum = Payment::where('status','=',1)->sum('amount');

        return view('payment::frontend.payments.provider.paymenthistory',['payments'=>$payments,'sum'=>$sum]);
    }
}
