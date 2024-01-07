<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Laracasts\Flash\Flash;
use Modules\Code\Models\Code;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Trez\RayganSms\Facades\RayganSms;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'mobile' => ['required'],
        ]);
        $user = User::where('mobile', '=', $request->mobile)->first();
        if ($user == null) {
            return ["message" => "شماره وارد شده موجود نیست"];
        }
        $lastCode = Code::where('mobile', '=', $request->mobile)->first();
        if ($lastCode != null) {
            $now = Carbon::now();
            $valid = Carbon::createFromFormat('Y-m-d H:i:s', $lastCode->valid_time);
            if ($now->gt($valid)) {
                $lastCode->forceDelete();
                $code = Code::create([
                    'mobile' => $request->mobile,
                    'code' => rand(10000, 99999),
                    'valid_time' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s'),
                ]);
                if (env("SMS_ACTIVE")) {
                    RayganSms::sendMessage($code->mobile, 'کد تایید شما ' . $code->code . ' میباشد. کارا تعمیر');
                }
                return ["status"=>1,"message" => "کد تایید جدید پیامک شد - کد قبلی منقضی شده است"];
            } else {
                return ["status"=>1,"message" => "جهت ارسال مجدد کد ۱۲۰ ثانیه منتظر بمانید"];
            }
        } else {
            $code = Code::create([
                'mobile' => $request->mobile,
                'code' => rand(10000, 99999),
                'valid_time' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s'),
            ]);
            if (env("SMS_ACTIVE")) {
                RayganSms::sendMessage($code->mobile, 'کد تایید شما ' . $code->code . ' میباشد. کارا تعمیر');
            }
            return ["status" => 1];
        }
    }
    public function forgotPasswordVerify(Request $request){
        $request->validate([
            'code' => ['required'],
            'mobile' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        $mobile = $request->mobile;
        $lastCode = Code::where('mobile', '=', $mobile)->first();
        if($lastCode == null){
            return ["message"=>"شماره موبایل وارد شده صحیح نیست"];
        }
        $now = Carbon::now();
        $valid = Carbon::createFromFormat('Y-m-d H:i:s', $lastCode->valid_time);
        if ($now->gt($valid)) {
            return ["message"=>"کد وارد شده منقضی شده است"];
        }
        if ($request->code == $lastCode->code) {
            $user = User::where('mobile', '=', $mobile)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return ["status"=>1];
        }else{
            return ["message"=>"کد وارد شده صحیح نیست"];
        }
    }
}
