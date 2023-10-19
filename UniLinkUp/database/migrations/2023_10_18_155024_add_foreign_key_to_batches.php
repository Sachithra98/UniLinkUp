<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToBatches extends Migration
{
    public function up()
    {
        Schema::table('batches', function (Blueprint $table) {
            // Add a foreign key constraint to the `faculty_id` column
            $table->foreign('Faculty_Id')
                ->references('Faculty_Id')
                ->on('faculties')
                ->onDelete('cascade'); // Define what should happen on delete
        });
    }

    public function down()
    {
        Schema::table('batches', function (Blueprint $table) {
            $table->dropForeign(['Faculty_Id']);
        });
    }
}


