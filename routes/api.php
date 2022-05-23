<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\AnnouncementsController;



Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {

    Route::get('/selling',[AnnouncementsController::class,'getSellingAnnouncements']);
    Route::get('/renting',[AnnouncementsController::class,'getRentingAnnouncements']);
    Route::delete('/removeannouncement/{id}',[AnnouncementsController::class,'destroy']);
    Route::post('/new',[AnnouncementsController::class,'store']);
    Route::get('/users',[PassportAuthController::class,'getUsers']);
    Route::delete('/removeuser/{id}',[PassportAuthController::class,'destroy']);
    
});

// Test request
Route::post('/testReq',[AnnouncementsController::class,'testReq']);