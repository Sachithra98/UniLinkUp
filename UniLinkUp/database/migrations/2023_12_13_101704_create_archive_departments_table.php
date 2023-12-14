<?php

// database/migrations/xxxx_xx_xx_create_archive_departments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchiveDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('archive_departments', function (Blueprint $table) {
            $table->id();
            $table->string('Dep_Id');
            $table->string('Dep_Name');
            $table->string('Faculty_Id');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('archive_departments');
    }
};
