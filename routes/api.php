<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\AnnouncementsController;



Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::resource('posts', PostController::class);
    Route::get('/all',[AnnouncementsController::class,'index']);
    Route::get('/selling',[AnnouncementsController::class,'getSellingAnnouncements']);
    Route::get('/renting',[AnnouncementsController::class,'getRentingAnnouncements']);
});
Route::post('/new',[AnnouncementsController::class,'store']);

// Test request
Route::get('/testReq',[AnnouncementsController::class,'testReq']);