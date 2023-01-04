<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nisn');
            $table->string('name');
            $table->string('npwp');
            $table->string('gender');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('goldar');
            $table->string('ibu');
            $table->string('ayah');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('kodepos');
            $table->string('phone');
            $table->string('email');
            $table->string('pendidikan');
            $table->string('nama_sekolah');
            $table->string('nilai_raport');
            $table->string('alamat_sekolah');
            $table->string('kota_sekolah');
            $table->string('tahunlulus');
            $table->string('jurusan1');
            $table->string('jurusan2');
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
        Schema::dropIfExists('biodatas');
    }
};
