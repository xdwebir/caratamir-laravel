<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function roles(){
        $user = Auth()->user();
        return ["roles"=> $user->getRoleNames()];
    }

    public function editProfile(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
        ]);
        $user_profile = User::where('id', '=', Auth()->user()->id)->first();
        $user_profile->update($request->all());
        return ['status'=>1];
    }
    public function editPassword(Request $request){
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);
        $request_data = $request->only('password');
        $request_data['password'] = Hash::make($request_data['password']);

        Auth()->user()->update($request_data);
        return ['status'=>1];

    }
}
