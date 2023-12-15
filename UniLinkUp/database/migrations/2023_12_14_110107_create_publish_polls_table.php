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

            $table->foreignId('poll_id')->constrained('publish_polls','id'); // Foreign key relationship
            $table->string('poll_title'); // String column for poll title
            $table->text('poll_desc')->nullable(); // Nullable string column for poll description
            $table->string('media_path')->nullable();
            $table->string('Approval_Letter')->nullable();
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
