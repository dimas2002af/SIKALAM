<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function showForm()
    {
        return view('permohonan.form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required|email',
            'dokumen' => 'required',
        ]);

        $permohonan = new Permohonan();
        $permohonan->nik = $request->nik;
        $permohonan->nama = $request->nama;
        $permohonan->instansi = $request->instansi;
        $permohonan->jabatan = $request->jabatan;
        $permohonan->nomor_hp = $request->nomor_hp;
        $permohonan->email = $request->email;
        $permohonan->jenis_dokumen = $request->dokumen;
        $permohonan->save();

        $request->session()->put('jenis_dokumen', $request->input('dokumen'));
        $request->session()->put('kode', $permohonan->kode);

        return redirect()->route('permohonan.entry'); // Ganti dengan route yang sesuai
    }
}