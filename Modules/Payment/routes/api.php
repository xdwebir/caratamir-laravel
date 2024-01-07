<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


    Route::group(['middleware' => ['auth:sanctum', 'can:view_frontend_accountant'],'prefix'=>'accountant'], function () {
        Route::get('paymentshistory',[Modules\Payment\Http\Controllers\API\Accountant\PaymentsController::class,'paymentsHistory']);
        Route::get('confirmpayment',[Modules\Payment\Http\Controllers\API\Accountant\PaymentsController::class,'confirmPaymentList']);
        Route::get('payment/{id?}',[Modules\Payment\Http\Controllers\API\Accountant\PaymentsController::class,'getPayment']);
        Route::delete('payment/{id?}',[Modules\Payment\Http\Controllers\API\Accountant\PaymentsController::class,'deletePayment']);
        Route::put('payment/{id?}',[Modules\Payment\Http\Controllers\API\Accountant\PaymentsController::class,'confirmPayment']);
        Route::get('userpayments/{id?}',[Modules\Payment\Http\Controllers\API\Accountant\PaymentsController::class,'getUserPayments']);
    });

    Route::group(['middleware' => ['auth:sanctum', 'can:view_frontend_service_provider'],'prefix'=>'provider'], function () {
        Route::post('addpayment',[Modules\Payment\Http\Controllers\API\Provider\PaymentsController::class,'addPayment']);
        Route::get('paymentshistory',[Modules\Payment\Http\Controllers\API\Provider\PaymentsController::class,'paymentsHistory']);
    });

});
