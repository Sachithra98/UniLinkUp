<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToEditors extends Migration
{
    public function up()
    {
        Schema::table('editors', function (Blueprint $table) {
            // Add foreign key constraints for multiple columns

            // Faculty_Id foreign key
         
            $table->foreign('Faculty_Id')->references('Faculty_Id')->on('faculties')->onDelete('cascade');

            // Batch_Id foreign key
           
            $table->foreign('Batch_Id')->references('Batch_Id')->on('batches')->onDelete('cascade');

            // Admin_Id foreign key
          
            $table->foreign('Admin_Id')->references('Admin_Id')->on('admins')->onDelete('cascade');

            // Dep_Id foreign key
          
            $table->foreign('Dep_Id')->references('Dep_Id')->on('departments')->onDelete('cascade');

            // Society_Id foreign key
            
            $table->foreign('Society_Id')->references('Society_Id')->on('societies')->onDelete('cascade');
        });
    }

  /*   public function down()
    {
        Schema::table('editors', function (Blueprint $table) {
            // Drop all foreign key constraints
            $table->dropForeign(['Faculty_Id']);
            $table->dropForeign(['Batch_Id']);
            $table->dropForeign(['Admin_Id']);
            $table->dropForeign(['Dep_Id']);
            $table->dropForeign(['Society_Id']);
        });
    } */
}
