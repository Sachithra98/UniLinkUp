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
        Schema::create('students', function (Blueprint $table) {
            $table->string('Student_Id')->primary();
            $table->string('Faculty_Id');
            $table->string('Batch_Id');
            $table->string('email');
            $table->string('password');
            $table->string('S_Name');
            $table->string('Admin_Id');
            $table->string('Dep_Id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
