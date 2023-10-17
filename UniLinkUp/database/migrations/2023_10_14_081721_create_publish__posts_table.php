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
        Schema::create('publish__posts', function (Blueprint $table) {
            $table->string('Moderator_Id')->primary();
            $table->string('Post_Id');
            $table->timestamp('Published_Date');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publish__posts');
    }
};
