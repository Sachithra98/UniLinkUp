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
    Schema::create('albums', function (Blueprint $table) {
        $table->string('Album_Id');
        $table->string('Post_Id');
        $table->string('Album_Multimedia');
        $table->string('Student_Id');
        $table->string('Editor_Id');

        // Define a composite primary key on 'Album_Id' and 'Post_Id'
        $table->primary(['Album_Id', 'Post_Id']);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
