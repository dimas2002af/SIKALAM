<?php

namespace App\Http\Controllers;

use App\Models\EntryData;
use App\Models\Permohonan;
use App\Models\Upload;
use Illuminate\Http\Request;

class BuktiController extends Controller
{
    public function showBuktiPermohonan()
    {
         // Ambil data permohonan dari session
         $permohonan = Permohonan::where('jenis_dokumen', session('jenis_dokumen'))->first();

         // Ambil data entry data berdasarkan jenis dokumen yang sama
         $entryData = EntryData::where('jenis_dokumen', session('jenis_dokumen'))->first();
 
        //  // Ambil data upload dokumen terkait
         $uploadDokumen = Upload::where('jenis_dokumen', session('jenis_dokumen'))->first();
 
         // Tampilkan tampilan bukti permohonan dengan data permohonan, entry data, dan upload dokumen
         return view('permohonan.bukti', compact('permohonan', 'entryData', 'uploadDokumen'));
    }

    public function simpanBuktiPermohonan(Request $request)
    {
        // Implement the logic to save the data to the database or perform any other actions upon form submission.
        // The data will be available in the $request variable.
        
        // Redirect back to the previous page or any other desired page.
        return redirect()->back()->with('success', 'Bukti Permohonan berhasil disimpan.');
    }
}
