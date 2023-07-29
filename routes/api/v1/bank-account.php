<?php

use Api\BankAccount\CreateBankAccountController;
use Api\BankAccount\GetBankAccountDetailController;
use Api\BankAccount\GetBankAccountTransactionsController;
use Api\BankAccount\TransferMoneyController;
use Illuminate\Support\Facades\Route;

Route::post("/store", [CreateBankAccountController::class, "execute"]);
Route::post("/transfer", [TransferMoneyController::class, "execute"]);
Route::get("/{bankAccount}", [GetBankAccountDetailController::class, "execute"]);
Route::get("/{bankAccount}/transactions", [GetBankAccountTransactionsController::class, "execute"]);
