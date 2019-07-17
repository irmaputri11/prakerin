<?php

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

Route::get('contoh','ContohController@index');
Route::get('contoh','ContohController@index2');
Route::resource('siswi','Siswicontroller');
Route::resource('sekolah','SekolahController');

Route::resource('kategori','kategoriController');

Route::resource('tag','tagController');
Route::resource('siswa','siswaController');
Route::resource('artikel','artikelCrontroller');
Route::resource('cors','kategoriController');


Route::group(['middlaware' => 'cors'], function () {
Route::resource('kategori','kategoriController');
Route::resource('tag','tagController');
Route::resource('artikel','artikelController');


});

