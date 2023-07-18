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
        Schema::create(TableNames::transactions, function (Blueprint $table) {
            $table->id();
			
			$table->foreignId("sender_id")
				->references("id")
				->on(TableNames::bankAccounts);
	
	        $table->foreignId("receiver_id")
		        ->references("id")
		        ->on(TableNames::bankAccounts);
			
			$table->unsignedBigInteger("amount");
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TableNames::transactions);
    }
};
