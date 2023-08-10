<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('permohonan', function (Blueprint $table) {
        $table->string('kode')->unique()->nullable()->after('id');
    });

    Schema::table('entry_data', function (Blueprint $table) {
        $table->string('kode')->unique()->nullable()->after('id');
    });

    Schema::table('upload_dokumen', function (Blueprint $table) {
        $table->string('kode')->unique()->nullable()->after('id');
    });
}

public function down()
{
    Schema::table('permohonan', function (Blueprint $table) {
        $table->dropColumn('kode');
    });

    Schema::table('entry_data', function (Blueprint $table) {
        $table->dropColumn('kode');
    });

    Schema::table('upload_dokumen', function (Blueprint $table) {
        $table->dropColumn('kode');
    });
}
};
