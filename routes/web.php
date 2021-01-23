<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class,'index'])->name('index');

Route::group([
    'prefix' => 'categories',
], function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/', [MainController::class, 'categories'])->name('categories');
    Route::get('/{category}', [MainController::class, 'category'])->name('category');
    Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');
});
Route::group([
    'prefix'=>'basket',
],function (){
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/', [MainController::class, 'basket'])->name('basket');
    Route::get('/place', [MainController::class, 'basketPlace'])->name('basketPlace');
});

