<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('index');
});
 */

Route::get('/',[GuestController::class,'index']);