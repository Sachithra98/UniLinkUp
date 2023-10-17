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
        Schema::create('post__operations', function (Blueprint $table) {
            $table->string('Viewer_Id')->primary();
            $table->string('Post_Id');
            $table->timestamp('View_Date');
            $table->string('Type_Id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post__operations');
    }
};
