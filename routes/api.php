<?php
use Illuminate\support\Facades\Route;






Route::post(uri:'/reset', action:'ResetController@reset');






Route::get(uri:'/balance',action:'BalanceController@show');





Route::post(uri:'/event',action:'EventController@store');

