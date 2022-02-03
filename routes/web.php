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

Auth::routes(['register' => false, 'reset' => false]);

Route::get("/sso/redirect", 'App\Http\Controllers\SSO\SSOController@redirect')->name("sso.redirect");
Route::get("/callback", 'App\Http\Controllers\SSO\SSOController@callback')->name("sso.callback");
Route::get("/sso/connect", 'App\Http\Controllers\SSO\SSOController@connect')->name("sso.connect");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//     return redirect('/sso/redirect');
// });

Route::get('/', function () {
    return redirect('/home');
});