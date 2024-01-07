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

class LoginController extends Controller
{

    public function login(Request $request){
        $request->validate([
            'mobile' => ['required'],
            'password' => ['required'],
        ]);

        $mobile = $request->mobile;
        $password = $request->password;
        $user = User::where('mobile', '=', $mobile)->first();
        if ($user != null && password_verify($password, $user->password)) {

            return [
                'status' => 1,
                'token' => $user->createToken("token")->plainTextToken
            ];


        }
        return ['message' => 'اطلاعات وارد شده صحیح نیست'];
    }



}
