<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('votes', function (Blueprint $table) {
            // Add a foreign key column
            $table->unsignedBigInteger('poll_id');

            // Define the foreign key constraint
            $table->foreign('poll_id')
                  ->references('id')
                  ->on('polls')
                  ->onDelete('cascade'); // This ensures that if a poll is deleted, associated votes are also deleted

            // You can add other columns here if needed
            // $table->string('choice');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votes', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['poll_id']);

            // Drop the foreign key column
            $table->dropColumn('poll_id');
        });
    }
}
