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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('Faculty_Id');
            $table->string('Dep_Id');
            $table->string('email')->unique;
            $table->string('password');
            $table->string('Staff_Name');
            $table->string('Admin_Id');
            $table->timestamps();
            $table->foreignId('Admin_Id')->constrained('admins','id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Staff');
    }
};
