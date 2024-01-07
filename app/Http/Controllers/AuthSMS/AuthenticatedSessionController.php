<?php

namespace App\Http\Controllers\AuthSMS;

use App\Events\Auth\UserLoginSuccess;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'mobile' => ['required'],
            'password' => ['required'],
        ]);

        $mobile = $request->mobile;
        $password = $request->password;
        $user = User::where('mobile', '=', $mobile)->first();
        if ($user != null && password_verify($password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }



        return back()->withErrors([
            'mobile' => 'اطلاعات ورودی صحیح نمی باشد.',
        ])->onlyInput('mobile');
    }

    /**
     * Destroy an authenticated session.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
