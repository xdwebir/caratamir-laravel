<?php

namespace App\Http\Controllers\AuthSMS;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Laracasts\Flash\Flash;
use Modules\Code\Models\Code;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Trez\RayganSms\Facades\RayganSms;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'mobile' => ['required'],
        ]);
        $user = User::where('mobile', '=', $request->mobile)->first();
        if($user == null){
            Flash::success("شماره وارد شده موجود نیست")->important();
            return redirect()->back();
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
                    RayganSms::sendMessage($code->mobile, 'کد تایید شما '.$code->code.' میباشد. کارا تعمیر');
                }
                Session::put('mobile', $request->mobile);
                return view('auth.reset-password');
            }else{
                Session::put('mobile', $request->mobile);
                return view('auth.reset-password');
            }
        }else{
            $code = Code::create([
                'mobile' => $request->mobile,
                'code' => rand(10000, 99999),
                'valid_time' => Carbon::now()->addMinutes(2)->format('Y-m-d H:i:s'),
            ]);
            if (env("SMS_ACTIVE")) {
                RayganSms::sendMessage($code->mobile, 'کد تایید شما '.$code->code.' میباشد. کارا تعمیر');
            }
            Session::put('mobile', $request->mobile);
            return view('auth.reset-password');
        }


    }
}
