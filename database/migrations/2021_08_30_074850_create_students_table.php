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
            $table->id();
            $table->string('nis');
            $table->string('namaSiswa');
            $table->string('kompetensiKeahlian');
            $table->date('tglMulaiPKL');
            $table->date('tglSelesaiPKL');
            $table->string('kelas');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');    
            $table->string('jenisKelamin');
            $table->char('golDarah', 2);
            $table->string('tahunPelajaran');
            $table->string('noHP');
            $table->string('email');
            $table->text('alamat');
            $table->string('namaOrtu');
            $table->text('alamatOrtu');
            $table->string('noHpOrtu');
            $table->string('photoSiswa');
            $table->string('parafSiswa');
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
