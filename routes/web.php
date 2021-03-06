<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/', [
    'uses' => 'App\Http\Controllers\WelcomeController@index',
    'as' => 'welcome_page'
]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:user'], function() {
        Route::resource('tasks', \App\Http\Controllers\TaskController::class);
    });
    Route::group(['middleware' => 'role:admin'], function() {
        Route::resource('users', \App\Http\Controllers\UserController::class);
    });
});
