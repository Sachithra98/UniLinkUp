<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStudents extends Migration
{
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            // Add a foreign key constraint to the `Faculty_Id` column
            $table->foreign('Faculty_Id')->references('Faculty_Id')->on('faculties')->onDelete('cascade');

            // Add a foreign key constraint to the `Batch_Id` column
            $table->foreign('Batch_Id')->references('Batch_Id')->on('batches')->onDelete('cascade');

            // Add a foreign key constraint to the `Admin_Id` column
            $table->foreign('Admin_Id')->references('Admin_Id')->on('admins')->onDelete('cascade');

            // Add a foreign key constraint to the `Dep_Id` column
            $table->foreign('Dep_Id')->references('Dep_Id')->on('departments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['Faculty_Id']);
            $table->dropForeign(['Batch_Id']);
            $table->dropForeign(['Admin_Id']);
            $table->dropForeign(['Dep_Id']);
        });
    }
}

