<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intern_students', function (Blueprint $table) {
            $table->increments('idInternStudents','primary_key');
            $table->bigInteger('nis');
            $table->string('idCompanyDetails');
            $table->date('tanggalMulai');
            $table->date('tanggalSelesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intern_students');
    }
}
