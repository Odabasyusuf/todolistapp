<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\panel\IndexController;

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
    return redirect('login');
});

Route::get('/dashboard', [IndexController::class, 'index'])->middleware('auth:sanctum')->name('dashboard');

Route::group(['middleware' => ['auth:sanctum'], 'as' => 'todolist.'], function () {
    Route::get('/category/{slug}', [IndexController::class, 'category'])->name('category-page');
});
