<?php

use App\Http\Controllers\Api\NewsApiController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:sanctum'])->group(function(){


    Route::get('/news',[NewsApiController::class,'index'])->name('news-index');
    Route::get('/news/{news}',[NewsApiController::class,'show']);
    Route::post('/news',[NewsApiController::class,'store']);
});

Route::post('/register',[MainController::class,'register']);
