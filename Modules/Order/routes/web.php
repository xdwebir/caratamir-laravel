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
Route::group(['namespace' => '\Modules\Order\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {

    /*
     *
     *  Frontend Orders Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'orders';
    $controller_name = 'OrdersController';
    // Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    // Route::get("$module_name/{id}/{slug?}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);

    Route::group(['middleware' => ['auth','can:view_frontend_customer'], 'as' => 'customer.'], function () {
        /*
        *
        *  Users customer Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'orders';
        $controller_name = 'OrdersController';
        Route::get("$module_name", ['as' => "$module_name.create", 'uses' => "$controller_name@create"]);
        Route::post("$module_name", ['as' => "$module_name.store", 'uses' => "$controller_name@store"]);
        Route::get("$module_name/customer/orderhistory", ['as' => "$module_name.orderhistory", 'uses' => "$controller_name@customerorderhistory"]);

    });
    Route::group(['middleware' => ['auth','can:view_frontend_operator'], 'as' => 'operator.'], function () {
        /*
        *
        *  Users operator Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'orders';
        $controller_name = 'OrdersController';
        Route::get("$module_name/waitinglist", ['as' => "$module_name.waitinglist", 'uses' => "$controller_name@waitinglist"]);
        Route::get("$module_name/confirmorder/{id}", ['as' => "$module_name.confirmorder", 'uses' => "$controller_name@confirmorder"]);
        Route::post("$module_name/addprovider/{order_id}/{provider_id}", ['as' => "$module_name.addprovider", 'uses' => "$controller_name@addprovider"]);
        Route::get("$module_name/operator/orderhistory", ['as' => "$module_name.orderhistory", 'uses' => "$controller_name@operatororderhistory"]);


    });

    Route::group(['middleware' => ['auth','can:view_frontend_service_provider'], 'as' => 'provider.'], function () {
        /*
        *
        *  Users provider Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'orders';
        $controller_name = 'OrdersController';
        Route::get("$module_name/pricedefinelist", ['as' => "$module_name.pricedefinelist", 'uses' => "$controller_name@pricedefinelist"]);
        Route::get("$module_name/provider/orderhistory", ['as' => "$module_name.orderhistory", 'uses' => "$controller_name@providerorderhistory"]);
        Route::get("$module_name/pricedefine/{order_id}", ['as' => "$module_name.pricedefine", 'uses' => "$controller_name@pricedefine"]);
        Route::post("$module_name/setprice/{order_id}", ['as' => "$module_name.setprice", 'uses' => "$controller_name@setprice"]);

    });
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Order\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Backend Orders Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'orders';
    $controller_name = 'OrdersController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::resource("$module_name", "$controller_name");
});
