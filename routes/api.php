<?php

use App\Http\Controllers\API\ForgotPasswordController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\LogoutController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return User::where('id', '=', $request->user()->id)->get(['first_name', 'last_name', 'mobile']);
    });

    Route::group(['middleware' => ['throttle:5,1']], function () {
        Route::post('login', [LoginController::class, 'login']);
        Route::post('register', [RegisterController::class, 'register']);
        Route::post('verify', [RegisterController::class, 'verify']);
        Route::post('forgotpassword', [ForgotPasswordController::class, 'forgotPassword']);
        Route::post('forgotpasswordverify', [ForgotPasswordController::class, 'forgotPasswordVerify']);
    });

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::get('roles', [UserController::class, 'roles']);
        Route::post('allTokensLogout', [LogoutController::class, 'allTokensLogout']);
        Route::post('editprofile', [UserController::class, 'editProfile']);
        Route::post('editpassword', [UserController::class, 'editPassword']);
        Route::post('specificTokenLogout/{id}', [LogoutController::class, 'specificTokenLogout']);
        Route::post('currentTokenLogout', [LogoutController::class, 'currentTokenLogout']);
    });

    Route::group(['middleware' => ['auth:sanctum', 'can:view_backend']], function () {
    });
});
