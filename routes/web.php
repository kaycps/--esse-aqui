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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile', 'ProfileController');
Route::resource('adress', 'AdressController');
Route::resource('select-process', 'SelectProcessController');
Route::resource('special-need', 'SpecialNeedController');
Route::resource('career', 'CareerController');
Route::resource('quota', 'QuotaController');
Route::resource('select-process.inscription', 'InscriptionController');
Route::resource('admin', 'AdminController');

Route::group(['middleware' => 'admin'], function() {
	Route::get('select-process/create', ['uses' => 'SelectProcessController@create']); 
	Route::get('admin', ['uses' => 'AdminController@index']);
	Route::get('career', ['uses' => 'CareerController@index']);
	Route::get('career/create', ['uses' => 'CareerController@create']);
	Route::get('special-need', ['uses' => 'SpecialNeedController@index']);
	Route::get('special-need/create', ['uses' => 'SpecialNeedController@create']);
	Route::get('quota', ['uses' => 'QuotaController@index']);
	Route::get('quota/create', ['uses' => 'QuotaController@create']);

});

// Route::get('select-process/create', ['middleware' => 'admin', function () {
//     //
// }]);
// Route::get('select-process/edit', ['middleware' => 'admin', function () {
//     //
// }]);
