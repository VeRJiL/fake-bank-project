<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use Illuminate\Support\Facades\Route;

Route::post("/signup", [SignUpController::class, "execute"]);
Route::post("/login", [LoginController::class, "execute"]);
