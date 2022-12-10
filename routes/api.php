<?php
use Illuminate\support\Facades\Route;
use PharIo\Manifest\Url;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ResetController;

Route::post('/reset',[ResetController::class, 'reset']);





Route::get('/balance', [BalanceController::class, 'show']);






Route::post('/event',[EventController::class,'store']);



