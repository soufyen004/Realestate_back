<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactDetailsController;


Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
Route::post('search',[SearchController::class, 'searchResult']);
Route::post('contactupdate',[ContactDetailsController::class,'Update']);
Route::get('contactdetails',[ContactDetailsController::class,'contactdetails']);
Route::get('/bannedusers',[PassportAuthController::class,'getBannedUsers']);


Route::middleware('auth:api')->group(function () {

    Route::get('/selling',[AnnouncementsController::class,'getSellingAnnouncements']);
    Route::get('/renting',[AnnouncementsController::class,'getRentingAnnouncements']);
    Route::delete('/removeannouncement/{id}',[AnnouncementsController::class,'destroy']);
    Route::post('/new',[AnnouncementsController::class,'store']);
    Route::get('/users',[PassportAuthController::class,'getUsers']);
    Route::get('/agents',[PassportAuthController::class,'getAgents']);
    Route::delete('/removeuser/{id}',[PassportAuthController::class,'destroy']);
    Route::post('/updateUser/{id}',[PassportAuthController::class,'updateUser']);
    Route::post('/bannedusers',[PassportAuthController::class,'bannedUsers']);
    
    Route::post('logout',[PassportAuthController::class,'logout']);

});


// Test request
// Route::post('/testReq',[AnnouncementsController::class,'testReq'])