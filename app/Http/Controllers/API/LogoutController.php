<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function allTokensLogout(){
        Auth()->user()->tokens()->delete();
    }
    public function specificTokenLogout($id){
        Auth()->user()->tokens()->where('id', $id)->delete();
    }
    public function currentTokenLogout(){
        Auth()->user()->currentAccessToken()->delete();
    }
}
