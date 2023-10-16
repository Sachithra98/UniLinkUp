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
        Schema::create('post__types', function (Blueprint $table) {
            $table->string('Type_Id');
            $table->string('Post_Id');
            $table->string('Type_Name');
            $table->string('Post_Type');

            $table->primary(['Type_Id', 'Post_Id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post__types');
    }
};
