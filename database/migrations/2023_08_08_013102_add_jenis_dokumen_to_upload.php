<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisDokumenToUpload extends Migration
{
    public function up()
    {
        Schema::table('upload_dokumen', function (Blueprint $table) {
            $table->string('jenis_dokumen'); // Tambahkan kolom jenis_dokumen
        });
    }

    public function down()
    {
        Schema::table('upload_dokumen', function (Blueprint $table) {
            $table->dropColumn('jenis_dokumen'); // Jika diperlukan, tambahkan perintah untuk menghapus kolom
        });
    }
}
