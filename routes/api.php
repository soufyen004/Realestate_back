<?php

use App\Http\Controllers\AnnoncementStatusController;
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


    Route::get('/annoncementsStatus',[AnnoncementStatusController::class,'getAll']);
    Route::put('/updateannouncement/{id}',[AnnouncementsController::class,'update']);
    Route::delete('/removeannouncement/{id}',[AnnouncementsController::class,'destroy']);
    Route::put('/markForRemove/{id}',[AnnouncementsController::class,'softRemove']);
    Route::post('/new',[AnnouncementsController::class,'store']);
    Route::get('/users',[PassportAuthController::class,'getUsers']);
    Route::get('/agents',[PassportAuthController::class,'getAgents']);
    Route::delete('/removeuser/{id}',[PassportAuthController::class,'destroy']);
    Route::post('/updateUser/{id}',[PassportAuthController::class,'updateUser']);
    Route::post('/bannedusers',[PassportAuthController::class,'bannedUsers']);
    Route::get('/markedForRemove',[AnnouncementsController::class,'markedForRemove']);
    Route::put('/restoreDeleted/{id}',[AnnouncementsController::class,'restoreDeleted']);
    Route::post('logout',[PassportAuthController::class,'logout']);

});


// public routes

    // check for server alive
    Route::get('/checkApiCall',[AnnouncementsController::class,'check']);


Route::get('/allAds',[AnnouncementsController::class,'index']);
Route::get('/amenities/{id}',[AnnouncementsController::class,'getAmenities']);
Route::get('/getAdById/{id}',[AnnouncementsController::class,'getAdById']);
Route::get('/getImages/{id}',[AnnouncementsController::class,'getMedia']);
Route::get('/getAdsByUserId/{id}',[AnnouncementsController::class,'getAdsByUserId']);
Route::get('/getAdAuthor/{id}',[AnnouncementsController::class,'getAdAuthor']);

