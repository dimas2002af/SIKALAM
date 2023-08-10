<?php

namespace App\Http\Controllers;

use App\Models\EntryData;
use App\Models\Permohonan;
use App\Models\Upload;
use Illuminate\Http\Request;

class SimpanController extends Controller
{
    public function showSimpanPermohonan()
    {
         // Ambil data permohonan dari session
         $permohonan = Permohonan::where('jenis_dokumen', session('jenis_dokumen'))->first();

         // Ambil data entry data berdasarkan jenis dokumen yang sama
         $entryData = EntryData::where('jenis_dokumen', session('jenis_dokumen'))->first();
 
        //  // Ambil data upload dokumen terkait
         $uploadDokumen = Upload::where('jenis_dokumen', session('jenis_dokumen'))->first();
 
         // Tampilkan tampilan bukti permohonan dengan data permohonan, entry data, dan upload dokumen
         return view('permohonan.simpan', compact('permohonan', 'entryData', 'uploadDokumen'));
    }
}
