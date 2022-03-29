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

Route::group(['middleware'=>['Authcheck']],function(){
    Route::get('/auth/logout','RegController@logout')->name('auth.logout');
Route::post('auth/save','RegController@save')->name('auth.save');
Route::post('/auth/check','RegController@check')->name('auth.check');
    
  
    Route::get('auth/login','RegController@login')->name('auth.login');
    Route::get('auth/register','RegController@register')->name('auth.register');
    Route::get('auth/user','RegController@user')->name('auth.user');
    

});
