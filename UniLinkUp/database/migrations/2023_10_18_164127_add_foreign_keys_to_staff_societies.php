<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToStaffSocieties extends Migration
{
    public function up()
    {
        Schema::table('staff__societies', function (Blueprint $table) {
            // Add a foreign key constraint to the `Staff_Id` column
            $table->foreign('Staff_Id')
                ->references('Staff_Id')
                ->on('staff')
                ->onDelete('cascade');

            // Add a foreign key constraint to the `Society_Id` column
            $table->foreign('Society_Id')
                ->references('Society_Id')
                ->on('societies')
                ->onDelete('cascade');
        });
    }

   /*  public function down()
    {
        Schema::table('staff__societies', function (Blueprint $table) {
            $table->dropForeign(['Staff_Id']);
            $table->dropForeign(['Society_Id']);
        });
    } */
}
