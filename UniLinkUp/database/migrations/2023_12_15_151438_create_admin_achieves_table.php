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
        Schema::create('admin_achieves', function (Blueprint $table) {
            $table->id('Achieve_Id'); // Assuming 'Achieve_Id' is the primary key
            $table->string('Admin_Id')->unique(); // Foreign key reference to Admin table
            $table->string('email');
            $table->string('password');
            $table->string('Admin_Name');
            // Any additional fields related to achievements
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_achieves');
    }
};
