<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('instansi');
            $table->string('jabatan');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('jenis_dokumen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('permohonan');
    }
};
