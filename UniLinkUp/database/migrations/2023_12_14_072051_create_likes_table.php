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
            $table->id();
            $table->string('Student_Id')->nullable();
            $table->unsignedBigInteger('Publish_notice_id')->default(0);
            $table->timestamps();
    
            $table->foreign('Student_Id')->references('Student_Id')->on('students');
            $table->foreign('Publish_notice_id')->references('Publish_notice_id')->on('publish_notices');
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
