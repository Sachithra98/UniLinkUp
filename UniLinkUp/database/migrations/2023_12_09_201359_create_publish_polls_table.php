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
        Schema::create('publish_polls', function (Blueprint $table) {
            $table->id();
           // Inside the migration file for the votes table
        $table->foreignId('poll_id')->constrained('polls','id'); // or any other method to create a foreign key
        // This creates a foreign key relationship with the "polls" table
            $table->string('poll_title');
            $table->string('poll_desc')->nullable();
            $table->string('media_path')->nullable();
            $table->string('question')->nullable();
            $table->string('option1')->nullable();
            $table->string('option2')->nullable();
            $table->string('option3')->nullable();
            $table->string('option4')->nullable();
            $table->string('option5')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publish_polls');
    }
};
