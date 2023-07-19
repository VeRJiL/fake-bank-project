<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankAccount\TransferMoneyController;
use App\Http\Controllers\BankAccount\CreateBankAccountController;
use App\Http\Controllers\BankAccount\GetBankAccountDetailController;
use App\Http\Controllers\BankAccount\GetBankAccountTransactionsController;

Route::post("/", [CreateBankAccountController::class, "execute"]);
Route::post("/transfer", [TransferMoneyController::class, "execute"]);
Route::get("/{bankAccount}", [GetBankAccountDetailController::class, "execute"]);
Route::get("/{bankAccount}/transactions", [GetBankAccountTransactionsController::class, "execute"]);
