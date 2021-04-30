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
})->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get("/service/notify", [App\Http\Controllers\ServiceController::class, 'notify'])->middleware('verified')->name("sendNotification");
Route::get("/service/{serviceUser}", [App\Http\Controllers\ServiceController::class, 'show'])->middleware('verified')->name("serviceShow");
