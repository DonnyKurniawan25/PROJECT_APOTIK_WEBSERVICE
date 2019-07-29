<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function () {
	Route::get('jenis-all','apiController@getJenis');
});

Route::post('post-penjualan', 'apiController@postPenjualan');
Route::get('get-detail', 'apiController@getDetail');
Route::get('get-karyawan', 'apiController@getKaryawan');
Route::get('get-penjualan', 'apiController@getPenjualan');
Route::post('post-detail', 'apiController@postDetail');
Route::get('get-produks', 'apiController@getProduks');
Route::put('update-detail/{id}', 'ApiController@updateDetail');



