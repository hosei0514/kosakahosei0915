<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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

// お問い合わせ入力ページ
Route::get('/', 'App\Http\Controllers\ContactsController@index')->name('contact');

// 確認ページ
Route::post('/confirm', 'App\Http\Controllers\ContactsController@confirm')->name('confirm');

// DB挿入、メール送信
Route::post('/process', 'App\Http\Controllers\ContactsController@process')->name('process');

// 完了ページ
Route::get('/complete', 'App\Http\Controllers\ContactsController@complete')->name('complete');