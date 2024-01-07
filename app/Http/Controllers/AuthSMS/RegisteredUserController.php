<?php

namespace App\Http\Controllers\AuthSMS;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;
use Laracasts\Flash\Flash;
use Modules\Verify\Models\Verify;
use Trez\RayganSms\Facades\RayganSms;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:191'],
            'last_name' => ['required', 'string', 'max:191'],
            'user_type' => ['required', 'in:customer,provider'],
            'mobile' => ['required', 'string', 'max:191', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
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
                    RayganSms::sendMessage($verify->mobile, 'کاربر گرامی ' . $verify->last_name . ' ' . $verify->first_name . ' کد تایید شما: ' . $verify->code . 'می باشد.');
                }

                Session::put('mobile', $request->mobile);
                return view('auth.verify');
            } else {
                Session::put('mobile', $request->mobile);
                return view('auth.verify');
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
                RayganSms::sendMessage($verify->mobile, 'کاربر گرامی ' . $verify->last_name . ' ' . $verify->first_name . ' کد تایید شما: ' . $verify->code . 'می باشد.');
            }

            Session::put('mobile', $request->mobile);
            return view('auth.verify');
        }
    }

    public function verify(Request $request)
    {
        $request->validate([
            'code' => ['required'],
        ]);

        $mobile = Session::get('mobile');
        $lastVerify = Verify::where('mobile', '=', $mobile)->first();
        $now = Carbon::now();
        $valid = Carbon::createFromFormat('Y-m-d H:i:s', $lastVerify->valid_time);
        if ($now->gt($valid)) {
            Flash::success("کد وارد شده منقضی شده است")->important();
            return redirect()->back();
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
            }
            $user->save();

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        } else {
            return redirect()->back();
        }
    }


}
