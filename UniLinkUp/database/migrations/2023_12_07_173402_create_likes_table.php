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
        Schema::create('likes', function (Blueprint $table) {
            $table->string('Like_Id')->primary();
            $table->unsignedBigInteger('Post_Id');
            $table->unsignedBigInteger('Student_Id');
            $table->timestamps();
           
            $table->foreign('Post_Id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('Student_Id')->references('id')->on('students')->onDelete('cascade');         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
