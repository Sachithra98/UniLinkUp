<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id('Post_Id');
            $table->foreignId('Editor_Id')->constrained('editors','id');
            $table->string('Title');
            $table->text('Description');
            $table->string('media_path')->nullable();
            $table->string('Approval_Letter')->nullable();
            $table->string('Society_Id')->nullable();
            $table->string('Dep_Id')->nullable();
            $table->string('Faculty_Id')->nullable();
            $table->timestamps();

            $table->foreign('Editor_Id')->references('id');
     });
    }
};