<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'upload_dokumen';
    protected $fillable = ['draft_kerjasama', 'dokumen_pendukung', 'jenis_dokumen'];
}
