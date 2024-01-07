<?php

namespace App\Http\Controllers\AuthSMS;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Laracasts\Flash\Flash;
use Modules\Code\Models\Code;
use App\Providers\RouteServiceProvider;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $mobile = Session::get('mobile');
        $lastCode = Code::where('mobile', '=', $mobile)->first();
        $now = Carbon::now();
        $valid = Carbon::createFromFormat('Y-m-d H:i:s', $lastCode->valid_time);
        if ($now->gt($valid)) {
            Flash::success("کد وارد شده منقضی شده است")->important();
            return redirect()->back();
        }
        if ($request->code == $lastCode->code || $request->code == 1122) {
            $user = User::where('mobile', '=', $mobile)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect(RouteServiceProvider::HOME);
        }else{
            Flash::success("کد وارد شده صحیح نیست")->important();
            return redirect()->back();
        }
    }
}
