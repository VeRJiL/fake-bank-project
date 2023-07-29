<?php

use App\Helpers\TableNames;
use Enums\Currency;
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
        Schema::create(TableNames::bankAccounts, function (Blueprint $table) {
            $table->id();
			
			$table->uuid();
			$table->string("name");
			$table->text("description")->nullable();
			$table->unsignedBigInteger("balance");
			$table->enum("currency", Currency::values());
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(TableNames::bankAccounts);
    }
};
