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
    Schema::create('post__multimedia', function (Blueprint $table) {
        $table->string('Post_Id')->primary();

        // Use the binary data type for storing multimedia files
        $table->binary('Multimedia');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post__multimedia');
    }
};
