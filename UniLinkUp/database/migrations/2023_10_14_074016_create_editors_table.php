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
        Schema::create('editors', function (Blueprint $table) {
            $table->string('Editor_Id')->primary();
            $table->string('Faculty_Id');
            $table->string('Batch_Id');
            $table->string('E_Email');
            $table->string('E_Password');
            $table->string('E_Name');
            $table->string('Society_Id');
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
        Schema::dropIfExists('editors');
    }
};
