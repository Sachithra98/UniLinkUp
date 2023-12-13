<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //sachithra
    public function up(): void
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id('Post_Id'); // This will make 'Post_Id' an auto-incrementing primary key
            $table->string('Editor_Id');
            $table->string('Title');
            $table->text('Description');
           $table->string('media_path')->nullable();
            $table->string('Approval_Letter')->nullable();
            $table->string('Society_Id')->nullable();
            $table->string('Dep_Id')->nullable();
            $table->string('Faculty_Id')->nullable();
    
            $table->timestamps(); // or remove the default value

    
            // Fix the typo in the foreign key declaration
            $table->foreign('Editor_Id')->references('Editor_Id')->on('editors');
            // Assuming 'id' is the primary key of 'societies' and 'departments' tables
            $table->foreign('Society_Id')->references('Society_Id')->on('societies');
            $table->foreign('Dep_Id')->references('Dep_Id')->on('departments');
            $table->foreign('Faculty_Id')->references('Faculty_Id')->on('faculties');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
