<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToRoles extends Migration
{
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            // Add a foreign key constraint to the `Admin_Id` column
            $table->foreign('Admin_Id')->references('Admin_Id')->on('admins')->onDelete('cascade');
        });
    }

    /* public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropForeign(['Admin_Id']);
        });
    } */
}

