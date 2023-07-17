<?php

use App\Helpers\TableNames;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(TableNames::bankAccountOwners, function (Blueprint $table) {
            $table->id();
	
	        $table->foreignId("user_id")
		        ->references("id")
		        ->on(TableNames::user)
		        ->restrictOnDelete();
	
	        $table->foreignId("bank_account_id")
		        ->references("id")
		        ->on(TableNames::bankAccounts)
		        ->restrictOnDelete();
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TableNames::bankAccountOwners);
    }
};
