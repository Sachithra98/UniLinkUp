<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToModerators extends Migration
{
    public function up()
    {
        Schema::table('moderators', function (Blueprint $table) {
            // Add a foreign key constraint to the `Editor_Id` column
            
            $table->foreign('Editor_Id')->references('Editor_Id')->on('editors')->onDelete('cascade');

            // Add a foreign key constraint to the `Admin_Id` column
            $table->foreign('Admin_Id')->references('Admin_Id')->on('admins')->onDelete('cascade');

            // Add a foreign key constraint to the `Dep_Id` column
            $table->foreign('Dep_Id')->references('Dep_Id')->on('departments')->onDelete('cascade');

            // Add a foreign key constraint to the `Society_Id` column
            $table->foreign('Society_Id')->references('Society_Id')->on('societies')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('moderators', function (Blueprint $table) {
            $table->dropForeign(['Editor_Id']);
            $table->dropForeign(['Admin_Id']);
            $table->dropForeign(['Dep_Id']);
            $table->dropForeign(['Society_Id']);
        });
    }
}
