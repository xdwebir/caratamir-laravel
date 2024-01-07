<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Payment\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {

    /*
     *
     *  Frontend Payments Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'payments';
    $controller_name = 'PaymentsController';
    //Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    //Route::get("$module_name/{id}/{slug?}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);
    Route::group(['middleware' => ['auth','can:view_frontend_service_provider']], function () {
        /*
        *
        *  Users provider Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'payments';
        $controller_name = 'PaymentsController';
        Route::get("$module_name/create", ['as' => "$module_name.create", 'uses' => "$controller_name@create"]);
        Route::get("$module_name/paymenthistory", ['as' => "$module_name.paymenthistory", 'uses' => "$controller_name@paymenthistory"]);
        Route::post("$module_name/store", ['as' => "$module_name.store", 'uses' => "$controller_name@store"]);

    });
    Route::group(['middleware' => ['auth','can:view_frontend_accountant']], function () {
        /*
        *
        *  Users accountant Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'payments';
        $controller_name = 'PaymentsController';
        Route::get("$module_name/confirmlist", ['as' => "$module_name.confirmlist", 'uses' => "$controller_name@confirmlist"]);
        Route::get("$module_name/confirm/{id}", ['as' => "$module_name.confirm", 'uses' => "$controller_name@confirm"]);
        Route::post("$module_name/confirmed/{id}", ['as' => "$module_name.confirmed", 'uses' => "$controller_name@confirmed"]);
        Route::post("$module_name/deleted/{id}", ['as' => "$module_name.deleted", 'uses' => "$controller_name@deleted"]);

    });
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Payment\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Backend Payments Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'payments';
    $controller_name = 'PaymentsController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::resource("$module_name", "$controller_name");
});
