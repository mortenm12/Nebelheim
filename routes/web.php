<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/character/{id}', 'HomeController@getCharacter');

Route::get('/character', 'HomeController@newCharacter');
Route::post('/character/new', 'HomeController@postCharacter');

route::get('/character/{id}/ability', 'HomeController@findAbility');

route::get('/ability/{id}', 'HomeController@ability');

route::get('/character/{id}/xp', 'HomeController@xp');
Route::post('/character/{id}/xp', 'HomeController@postXp');
