<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

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

Route::get('/', [HelloController::class, 'index']);

//news routes

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
	Route::resource('/categories', AdminCategoryController::class);
	Route::resource('/news', AdminNewsController::class);
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/categories', [NewsController::class, 'categories'])
	->name('news.categories');

Route::get('/categories/{id}', [NewsController::class, 'show'])
	->where('id', '\w+')
	->name('news.show');

Route::get('/news/{id}', [NewsController::class, 'index'])
	->where('id', '\d+')
	->name('news.index');


