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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('pendidikan');
            $table->string('nama_sekolah');
            $table->string('nilai_raport');
            $table->string('tahunlulus');           
            $table->string('alamat_sekolah');
            $table->string('kota_sekolah');
            $table->string('jurusan_sekolah');
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
        Schema::dropIfExists('education');
    }
};
