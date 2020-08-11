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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('discussions', 'DiscussionsController');

Route::resource('discussions/{discussion}/reply', 'ReplyController');

Route::post('discussions/{discussion}/reply/{reply}/mark-best-reply', 'DiscussionsController@bestReply')->name('discussions.best-reply');