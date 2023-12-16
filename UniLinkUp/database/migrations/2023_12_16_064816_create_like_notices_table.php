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
        Schema::create('like_notices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notice_id');
            $table->foreign('notice_id')->references('Publish_notice_id')->on('publish_notices')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_notices');
    }
};
