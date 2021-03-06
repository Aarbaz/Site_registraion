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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
Route::get('/', 'HomeController@index')->name('home');
Route::view('/form','SiteController@add')->name('form');
Route::view('/home','home');
Route::post('/home','SiteController@send');
/*Route::get('/home','SiteController@upload');*/
// Route::post('/uploadfile','SiteController@showUploadFile');

