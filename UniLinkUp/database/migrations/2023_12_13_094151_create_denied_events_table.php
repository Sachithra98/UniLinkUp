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
        Schema::create('denied_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts','Post_Id'); // Assuming 'notices' is the name of the table
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
        Schema::dropIfExists('denied_events');
    }
};
