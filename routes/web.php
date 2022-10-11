<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[PostController::class,'index']);
Route::get('/post',[PostController::class,'create']);
Route::post('/post',[PostController::class,'store'])->middleware('auth');
Route::get('post/{post}',[PostController::class,'show']);
Route::get('post/edit/{post}',[PostController::class,'edit'])->middleware('auth');
Route::PATCH('post/update/{post}',[PostController::class,'update'])->middleware('auth');
Route::get('/hide_post',[PostController::class,'hide'])->middleware('auth');



Route::post('/comment',[CommentController::class,'store'])->name('comments.store')->middleware('auth');
Route::get('/hide_comment',[CommentController::class,'hide'])->middleware('auth');

Route::get('/home',[HomeController::class,'index'])->middleware('auth');

//Auth Routes begins

Route::get('/signup',[AuthController::class,'get_signup']);
Route::post('/signup',[AuthController::class,'signup']);
Route::get('/signin',[AuthController::class,'get_signin'])->name('signin');
Route::post('/signin',[AuthController::class,'signin']);
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');