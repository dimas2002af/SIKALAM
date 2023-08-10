<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Permohonan extends Model
{
    protected $table = 'permohonan';

    protected $fillable = [
        'nik',
        'nama',
        'instansi',
        'jabatan',
        'nomor_hp',
        'email',
        'jenis_dokumen',
        'kode',
    ];

    public static function generateKode()
    {
        return 'KALAM' . Str::random(6);
    }

    /**
     * Summary of save
     * @param array $options
     * @return void
     */
    public function save(array $options = [])
    {
        if (!$this->kode) {
            $this->kode = self::generateKode();
        }
        parent::save($options);
    }
}