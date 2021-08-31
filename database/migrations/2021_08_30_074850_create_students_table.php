<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigInteger('nis',$autoIncrement = false, 'primary-key');
            $table->string('namaSiswa');
            $table->string('kompetensiKeahlian');
            $table->string('kelas');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');    
            $table->string('jenisKelamin');
            $table->char('golDarah', 1);
            $table->string('tahunPelajaran');
            $table->string('noHP', 13);
            $table->string('email');
            $table->text('alamat');
            $table->string('namaOrtu');
            $table->text('alamatOrtu');
            $table->string('noHpOrtu', 13);
            $table->text('parafSiswa');
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
        Schema::dropIfExists('students');
    }
}
