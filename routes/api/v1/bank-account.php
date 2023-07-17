<?php

use App\Http\Controllers\BankAccount\CreateBankAccountController;
use Illuminate\Support\Facades\Route;

Route::post("/", [CreateBankAccountController::class, "execute"]);
