<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntryData;
use Illuminate\Support\Facades\Redirect;

class EntryDataController extends Controller
{
    public function showEntryDataForm()
    {
        // Ambil data permohonan berdasarkan jenis dokumen yang telah disimpan sebelumnya
        $jenisDokumen = session('jenis_dokumen');

        // Tampilkan halaman entry data dengan data jenis dokumen yang dipilih sebelumnya
        return view('permohonan.entry', compact('jenisDokumen'));
    }

    public function submitEntryDataForm(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'bidang' => 'required|array',
            'perihal_dokumen' => 'required|string',
            'masa_berlaku' => 'required|string',
            'penanda_tangan' => 'required|array',
            'penanda_tangan.*' => 'required|string',
        ]);

        // Simpan data ke database
        $entryData = new EntryData([
            'jenis_dokumen' => session('jenis_dokumen'),
            'kode' => session('kode'),
            'bidang' => implode(', ', $request->input('bidang')),
            'perihal_dokumen' => $request->input('perihal_dokumen'),
            'masa_berlaku' => $request->input('masa_berlaku'),
            'penanda_tangan' => implode(', ', $request->input('penanda_tangan')),
        ]);

        $entryData->save();

        // Redirect ke halaman upload
        return Redirect::route('permohonan.upload')->with('success', 'Data berhasil disimpan.');
    }
}
