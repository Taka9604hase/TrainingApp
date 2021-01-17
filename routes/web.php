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

Route::get('/', function () {
    return view('welcome');
});

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::resource('Trainingmenus', 'MenuController', ['only' => ['index']]);

Route::get('selectmenu', 'MenuController@selectmenu')->name('selectmenu.get');

Route::get('selecttype', 'MenuController@selecttype')->name('selecttype.get');
Route::get('weighttraining', 'MenuController@weighttraining')->name('weighttraining.get');
Route::get('aerobictraining', 'MenuController@aerobictraining')->name('aerobictraining.get');
Route::get('confirmation', 'MenuController@confirmation')->name('confirmation.get');



Route::get('arm_chest', 'MenuController@arm_chest')->name('arm_chest.get');
Route::get('back_shoulder', 'MenuController@back_shoulder')->name('back_shoulder.get');
Route::get('foot', 'MenuController@foot')->name('foot.get');




//resultController
Route::resource('Result', 'ResultController',  ['only' => ['index']]);

Route::get('menu1', 'ResultController@menu1')->name('menu1.get');
Route::get('condition', 'ResultController@condition')->name('condition.get');
Route::get('outcome', 'ResultController@outcome')->name('outcome.get');
