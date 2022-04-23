<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[IndexController::class,'show'])->name('home');
Route::get('/about',[AboutController::class,'show'])->name('about');	
Route::get('/article/{id?}',[ArticleController::class,'show'])->name('article');
Route::get('/articles',[ArticlesController::class,'show'])->name('articles');
Route::match(['get','post'],'/addUser',[UserController::class,'show'])->name('addUser');
Route::get('/user/save',[UserController::class,'save']);	
Route::match(['get','post'],'/contact',[ContactController::class,'show'])->name('contact');
Route::post('/result',[ContactController::class,'result'])->name('result');
