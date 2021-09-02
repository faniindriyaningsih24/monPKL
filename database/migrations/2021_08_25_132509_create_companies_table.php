<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigInteger('idPerusahaan');
            $table->string('namaPerusahaan');
            $table->string('jenisUsaha');
            $table->string('namaPimpinan');
            $table->string('namaHrd');
            $table->text('alamat');
            $table->string('noHpPerusahaan',13);
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
        Schema::dropIfExists('companies');
    }
}
