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
        Schema::create('posts', function (Blueprint $table) {
            $table->string('Post_Id')->primary();
            $table->string('Description');
            $table->timestamp('Expire_Date');
            $table->string('Title');
            $table->string('media_path')->nullable();


            // Use the binary data type for storing the PDF file
            $table->binary('Approval_Letter');

            // Set a default value for the Published_Date column
            $table->timestamp('Published_Date')->default(now());

            $table->string('Society_Id');
            $table->string('Dep_Id');
            $table->string('Type_Id');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
