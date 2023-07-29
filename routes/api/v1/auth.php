<?php

use Api\Auth\LoginController;
use Api\Auth\SignUpController;
use Illuminate\Support\Facades\Route;

Route::post("/signup", [SignUpController::class, "execute"]);
Route::post("/login", [LoginController::class, "execute"]);
