<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Providerprofile\Http\Controllers\API\Provider\ProviderprofilesController;
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
    Route::group(['middleware' => ['auth:sanctum', 'can:view_frontend_service_provider'],'prefix'=>'provider'], function () {
        Route::get('profile',[ProviderprofilesController::class,'profile']);
        Route::post('editprofile',[ProviderprofilesController::class,'editProfile']);
    });
});
