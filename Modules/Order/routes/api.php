<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Order\Http\Controllers\api\customer\OrdersController;

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
    Route::group(['middleware' => ['auth:sanctum', 'can:view_frontend_customer'],'prefix'=>'customer'], function () {
        Route::post('addorder',[OrdersController::class,'store']);
        Route::get('allorder',[OrdersController::class,'all']);
    });

    Route::group(['middleware' => ['auth:sanctum', 'can:view_frontend_operator'],'prefix'=>'operator'], function () {
        Route::get('ordershistory',[Modules\Order\Http\Controllers\api\Operator\OrdersController::class,'ordersHistory']);
        Route::get('waitingorders',[Modules\Order\Http\Controllers\api\Operator\OrdersController::class,'waitingOrders']);
        Route::get('waitingorders/{id?}',[Modules\Order\Http\Controllers\api\Operator\OrdersController::class,'waitingOrderItem']);
        Route::get('availableproviders/{id?}',[Modules\Order\Http\Controllers\api\Operator\OrdersController::class,'availableProviders']);
        Route::post('assignprovidertoorder',[Modules\Order\Http\Controllers\api\Operator\OrdersController::class,'assignProviderToOrder']);
    });

    Route::group(['middleware' => ['auth:sanctum', 'can:view_frontend_service_provider'],'prefix'=>'provider'], function () {
        Route::get('pricedefinelist',[Modules\Order\Http\Controllers\api\Provider\OrdersController::class,'pricedefinelist']);
        Route::get('ordershistory',[Modules\Order\Http\Controllers\api\Provider\OrdersController::class,'ordersHistory']);
        Route::get('pricedefinelist/{id?}',[Modules\Order\Http\Controllers\api\Provider\OrdersController::class,'pricedefineitem']);
        Route::post('pricedefinelist',[Modules\Order\Http\Controllers\api\Provider\OrdersController::class,'pricedefine']);
    });

});
