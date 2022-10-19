<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\CategoryController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/* ============== Login Routes =================*/ 
Route::post('/login',[AuthController::class, 'Login']);

/* ============== Register Routes =================*/
Route::post('/register',[AuthController::class, 'Register']);

/* ==============  Proudct Show Routes =================*/
Route::get('/product/view',[ProductController::class, 'index'])->name('product.index');
/* ==============  Categories Show Routes =================*/
Route::get('/category/view',[CategoryController::class, 'index'])->name('categories.index');


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });