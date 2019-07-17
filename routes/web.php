<?php

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



Route::get('/admin', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('misteri', function () {
    return view('misteri');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::group(['prefix'=> '/'],
function () {
Route::get('/', 'herokuCrontroller@index');
Route::get('about', 'herokuCrontroller@about');
Route::get('misteri', 'herokuCrontroller@misteri');
Route::get('horor', 'herokuCrontroller@horor');
Route::get('sejarah', 'herokuCrontroller@sejarah');
Route::get('budaya', 'herokuCrontroller@budaya');
Route::get('kuliner', 'herokuCrontroller@kuliner');
Route::get('travelling', 'herokuCrontroller@travelling');
Route::get('/json/kategori', 'herokuCrontroller@getjson');
Route::get('/json/artikel', 'herokuCrontroller@getjson');
}
);

Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {
    Route::get('/', function () {
        return view('backend.index');
    });
    route::resource('kategori','KategoriCrontroller');
    route::resource('tag','TagCrontroller');
    route::resource('artikel','ArtikelCrontroller');
}
);

Route::get('kategori', function () {
    return view('kategori');
});

Route::get('siswa', function () {
    return view('siswa');
});

Route::get('tag', function () {
    return view('tag');
});
Route::get('artikel', function () {
    return view('artikel');
});