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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace'=>'\App\Http\Controllers'], function () {
Route::get('/purchases','PurchasesController@index');
Route::post('/purchases','PurchasesController@purchases');

//當使用者付款成功時，導到的畫面，是用post，Controller重導get的success方法

Route::post('purchases/successRedirect' ,'PurchasesController@successRedirect');
Route::get('purchases/success','PurchasesController@success');

//當使用者付款成功，藍星將資料導到的位址，是用post
Route::post('purchases/success','PurchasesController@orderSuccess');

//取消付款導到的頁面，是用get
Route::post('purchases/back','PurchasesController@back');

});
