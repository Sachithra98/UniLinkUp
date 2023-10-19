<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStudentSocieties extends Migration
{
    public function up()
    {
        Schema::table('student__societies', function (Blueprint $table) {
            // Add a foreign key constraint to the `Student_Id` column
            $table->foreign('Student_Id')->references('Student_Id')->on('students')->onDelete('cascade');

            // Add a foreign key constraint to the `Society_Id` column
            $table->foreign('Society_Id')->references('Society_Id')->on('societies')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('student__societies', function (Blueprint $table) {
            $table->dropForeign(['Student_Id']);
            $table->dropForeign(['Society_Id']);
        });
    }
}
