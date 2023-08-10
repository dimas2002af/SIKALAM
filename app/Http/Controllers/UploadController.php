<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showUpload()
    {
        return view('permohonan.upload');
    }
    public function submitDraft(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'draft_kerjasama' => 'required|mimes:doc,docx,pdf',
            'dokumen_pendukung' => 'required|mimes:doc,docx,pdf',
        ]);

        // Simpan file ke dalam folder "uploads/draft_kerjasama"
        $draft_kerjasamaPath = $request->file('draft_kerjasama')->store('uploads/draft_kerjasama');

        // Simpan file ke dalam folder "uploads/dokumen_pendukung"
        $dokumen_pendukungPath = $request->file('dokumen_pendukung')->store('uploads/dokumen_pendukung');

        // Proses penyimpanan data ke dalam database
        $uploadDokumen = new Upload([
            'jenis_dokumen' => session('jenis_dokumen'),
            'kode' => session('kode'),
        ]);
        $uploadDokumen->draft_kerjasama = $draft_kerjasamaPath;
        $uploadDokumen->dokumen_pendukung = $dokumen_pendukungPath;
        $uploadDokumen->save();

        // Redirect atau response sesuai kebutuhan
        return redirect('permohonan/bukti')->with('success', 'Dokumen berhasil diunggah.');
    }
}
