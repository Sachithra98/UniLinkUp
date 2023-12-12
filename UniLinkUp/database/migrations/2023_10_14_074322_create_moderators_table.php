<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations..
     */
    public function up(): void
    {
        Schema::create('moderators', function (Blueprint $table) {
            $table->string('Moderator_Id')->primary();
            $table->string('Dep_Id');
            $table->string('Position');
            $table->string('email');
            $table->string('password');
            $table->string('M_Name');
            $table->string('Society_Id');
            $table->string('Admin_Id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moderators');
    }
};
