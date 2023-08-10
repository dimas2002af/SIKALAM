<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryData extends Model
{
    use HasFactory;

    protected $table = 'entry_data';

    protected $fillable = [
        'jenis_dokumen',
        'bidang',
        'perihal_dokumen',
        'masa_berlaku',
        'penanda_tangan',
    ];
}
