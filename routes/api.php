<?php
use Illuminate\support\Facades\Route;
use PharIo\Manifest\Url;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\EventController;

Route::post(uri:'/reset', action:'ResetController@reset');





Route::get('/balance', [BalanceController::class, 'show']);






Route::post('/event',[EventController::class,'store']);

