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
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('publish_poll_id')->constrained(); // Foreign key relationship
            $table->string('poll_title'); // String column for poll title
            $table->string('poll_desc')->nullable(); // Nullable string column for poll description
            // Uncomment if you want to store binary data
            $table->string('question')->nullable(); // Nullable string column for poll question
            $table->string('option1')->nullable(); // Nullable string column for option 1
            $table->string('option2')->nullable(); // Nullable string column for option 2
            $table->string('option3')->nullable(); // Nullable string column for option 3
            $table->string('option4')->nullable(); // Nullable string column for option 4
            $table->string('option5')->nullable(); // Nullable string column for option 5
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
