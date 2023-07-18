<?php

use App\Http\Controllers\BankAccount\CreateBankAccountController;
use App\Http\Controllers\BankAccount\TransferMoneyController;
use Illuminate\Support\Facades\Route;

Route::post("/", [CreateBankAccountController::class, "execute"]);
Route::post("/transfer", [TransferMoneyController::class, "execute"]);
