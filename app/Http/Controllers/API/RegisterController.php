<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\Frontend\UserRegistered;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Laracasts\Flash\Flash;
use Modules\Verify\Models\Verify;
use Trez\RayganSms\Facades\RayganSms;
use Illuminate\Support\Facades\Cache;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:191'],
            'last_name' => ['required', 'string', 'max:191'],
            'mobile' => ['required', 'string', 'max:191', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => ['required', 'in:customer,provider'],
        ]);


        $lastVerify = Verify::where('mobile', '=', $request->mobile)->first();


        if ($lastVerify != null) {
            $now = Carbon::now();
            $valid = Carbon::createFromFormat('Y-m-d H:i:s', $lastVerify->valid_time);
            if ($now->gt($valid)) {
                $lastVerify->forceDelete();
                $verify = Verify::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'mobile' => $request->mobile,
                    'user_type' => $request->user_type,
                    'password' => Hash::make($request->password),
                    'code' => rand(10000, 99999),
                    'valid_time' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s'),
                ]);
                if (env("SMS_ACTIVE")) {
                    RayganSms::sendMessage($verify->mobile, 'مشتری گرامی ' . $verify->last_name . ' ' . $verify->first_name . ' کد تایید شما: ' . $verify->code . 'می باشد.');
                }

                return ['status' => 1, 'message' => 'پیامک ارسال شد'];
            } else {
                return ['status' => 2, 'message' => 'جهت ارسال مجدد پیام ۱۲۰ ثانیه صبر کنید'];
            }
        } else {
            $verify = Verify::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile' => $request->mobile,
                'user_type' => $request->user_type,
                'password' => Hash::make($request->password),
                'code' => rand(10000, 99999),
                'valid_time' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s'),
            ]);
            if (env("SMS_ACTIVE")) {
                RayganSms::sendMessage($verify->mobile, 'مشتری گرامی ' . $verify->last_name . ' ' . $verify->first_name . ' کد تایید شما: ' . $verify->code . 'می باشد.');
            }
            return ['status' => 1, 'message' => 'پیامک ارسال شد'];
        }
    }
    public function verify(Request $request)
    {
        $request->validate([
            'code' => ['required'],
            'mobile' => ['required'],
        ]);

        $mobile = $request->mobile;
        $lastVerify = Verify::where('mobile', '=', $mobile)->first();
        if ($lastVerify == null) {
            return ["message" => "شماره وارد شده اشتباه است"];
        }
        $now = Carbon::now();
        $valid = Carbon::createFromFormat('Y-m-d H:i:s', $lastVerify->valid_time);
        if ($now->gt($valid)) {
            return ["message" => "کد وارد شده منقضی شده است"];
        }
        if ($request->code == $lastVerify->code) {
            $user = User::create([
                'mobile' => $lastVerify->mobile,
                'first_name' => $lastVerify->first_name,
                'last_name' => $lastVerify->last_name,
                'password' => $lastVerify->password,
            ]);
            if ($lastVerify->user_type == "customer") {
                $user->givePermissionTo('view_frontend_customer');
                $user->assignRole('customer');
            } elseif ($lastVerify->user_type == "provider") {
                $user->givePermissionTo('view_frontend_service_provider');
                $user->assignRole('service provider');
            } else {
                return ["message" => "نوع کاربر باید customer یا provider باشد"];
            }

            $user->save();
            app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
            Cache::flush();
            return [
                'status' => 1
            ];
        } else {
            return ["message" => "کد وارد شده اشتباه است"];
        }
    }
}
