<?php

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
        Schema::create('denieds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poll_id')->constrained(); // This creates a foreign key relationship with the "polls" table
            $table->string('reason');
            $table->string('corrections');
            $table->timestamps();

        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denieds');
    }
};
