<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\tset;
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
Route::get('index',[PageController::class,'index'])->name('index');
Route::get('contact',[PageController::class,'contact'])->name('contact');
Route::get('about',[PageController::class,'about'])->name('about');
Route::get('menu/{name}',[PageController::class,'products'])->name('menu');
Route::post('mail',[PageController::class,'contactSubmit'])->name('mail');
//Route::get('import',[tset::class,'import']);
Route::get('dashboard',[PageController::class,'dashboard'])->name('dashboard');
Route::get('product/{id}',[PageController::class,'product'])->name('product');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);



