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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'front\HomeController@index'); //front anasayfa
Route::get('/admin', 'admin\HomeController@index'); //front admin

//urun islemleri
Route::get('/admin/urunler', 'admin\UrunController@index');
Route::get('/admin/urun/edit/{id}', 'admin\UrunController@edit');
Route::get('/admin/urun/destroy/{id}', 'admin\UrunController@destroy');
Route::get('/admin/urun/show/{id}', 'admin\UrunController@show');
Route::get('/admin/urun/ekle', 'admin\UrunController@create');
Route::post('/admin/urun/save', 'admin\UrunController@store');
Route::post('/admin/urun/update/{id}', 'admin\UrunController@update');
//log islemi
Route::get('/admin/logs', 'admin\LogsController@index');

//*****admin login islemleri ****/
Route::get('/admin/login', 'admin\LoginController@index')->name('admin.login');
Route::post('/admin/login', 'admin\LoginController@login')->name('admin.login');
Route::get('/admin/logout', 'admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/register', 'admin\LoginController@register_form')->name('admin.register');
Route::post('/admin/register', 'admin\LoginController@register_save')->name('admin.register');



//***user login ****/
Route::get('login', 'front\LoginController@login_form')->name('login');
Route::post('login', 'front\LoginController@login')->name('login');
Route::get('logout', 'front\LoginController@logout')->name('logout');
Route::get('register', 'front\LoginController@register_form')->name('register');
Route::post('register', 'front\LoginController@register_save')->name('register');



//***user işlemleri ****/
Route::get('user', 'front\UserController@index')->name('user');

//******sepet işlemleri */

Route::post('sepete_ekle', 'front\UserController@sepete_ekle');
Route::get('sepetim', 'front\UserController@sepetim');

Route::post('siparisi_tamamla', 'front\UserController@siparisi_tamamla');

Route::post('satın_al', 'front\UserController@satın_al');







//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
