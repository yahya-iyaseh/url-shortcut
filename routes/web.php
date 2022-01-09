<?php

use App\Models\URLGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\URLGeneratorController;

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
Route::resource('yahyaurl', URLGeneratorController::class)->middleware('auth');
Route::get('/test', function () {
    $uuid = uniqid();

    dd($uuid);
});

Route::get('/{un}', [RedirectController::class, 'redirect']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
