<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;


Route::post('login', [UserController::class,'login']);
Route::post('reg', [UserController::class,'reg']);

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', [UserController::class, 'details']);
});
