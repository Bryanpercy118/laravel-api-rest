<?php
use Illuminate\support\Facades\Route;
use PharIo\Manifest\Url;
use App\Http\Controllers\BalanceController;

Route::post(uri:'/reset', action:'ResetController@reset');





Route::get('/balance', [BalanceController::class, 'show']);






Route::post(uri:'/event',action:'EventController@store');

