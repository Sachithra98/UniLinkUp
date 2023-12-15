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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Faculty_Id')->nullable();
            $table->string('Dep_Id')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('Staff_Name');
            $table->foreignId('Admin_Id')->constrained('admins','id');
            $table->rememberToken();
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
