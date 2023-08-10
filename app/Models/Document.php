<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'document';

    // Daftar kolom yang bisa diisi
    protected $fillable = ['title', 'file_path'];
}
