<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;
// use app\Http\Controllers\StudInsertController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FetchRetrieveController;


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

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

// Route::get('create_posts_table', [StudInsertController::class, 'index']);
// Route::post('store-form', [StudInsertController::class, 'store']);

Route::get('add-student', [StudentController::class, 'index']);
Route::post('add-student', [StudentController::class, 'store']);

Route::get('students', [FetchRetrieveController::class, 'index']);



Route::get('form', [CountryController::class, 'index']);

// Route::get('/devices',[DevicesController::class, 'index']);


Route::get('devices',[DevicesController::class,'index']);
Route::get('devices/create',[DevicesController::class, 'create']);
Route::post('devicesaction',[DevicesController::class, 'store']);
