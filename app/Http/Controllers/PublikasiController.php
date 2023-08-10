<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        // Ambil data $documents dari database menggunakan model Document
        $documents = Document::all(); // Ini mengambil semua data dari tabel documents
        
        // Kirim data $documents ke view publikasi.index
        return view('publikasi.index', compact('documents'));
    }
}
