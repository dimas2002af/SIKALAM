<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\EntryDataController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SimpanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    // Rute untuk halaman publikasi pengguna
    Route::get('/publications', [PublicationController::class, 'index'])->name('publications.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * Verification Routes
         */
        Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
        Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
        Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
    });

    Route::group(['middleware' => ['auth','verified']], function() {
        /**
         * Dashboard Routes
         */
        //Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/publikasi', [PublikasiController::class, 'index'])->name('publikasi.index');
        // Menampilkan form permohonan
        Route::get('/permohonan/form', [PermohonanController::class, 'showForm'])->name('permohonan.form');

        // Menangani pengiriman data dari form
        Route::post('/permohonan/submit', [PermohonanController::class, 'submitForm'])->name('permohonan.submit');
        // Route untuk menampilkan halaman entry data
        Route::get('/permohonan/entry', [EntryDataController::class, 'showEntryDataForm'])->name('permohonan.entry');  
        // Route untuk menyimpan data entry data ke database
        Route::post('/entry_data/submit', [EntryDataController::class, 'submitEntryDataForm'])->name('entry_data.submit');
        
        
        Route::get('/permohonan/upload', [UploadController::class, 'showUpload'])->name('permohonan.upload');
        Route::post('/submit_draft', [UploadController::class, 'submitDraft'])->name('submit_draft');

        // Rute untuk menangani pengiriman dokumen dari formulir dengan metode POST
        Route::post('/submit_dokumen', function (\Illuminate\Http\Request $request) {
            // Lakukan proses pengiriman dokumen sesuai kebutuhan Anda.
            // Misalnya, simpan dokumen ke direktori atau database.
            // Anda bisa akses data dokumen dari $request->file('nama_field_input_dokumen').

            // Contoh simpan dokumen ke direktori storage/app/dokumen/
            if ($request->hasFile('draft_kerjasama')) {
                $file = $request->file('draft_kerjasama');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('dokumen', $filename);
            }

            // Contoh simpan dokumen ke database
            // $file = $request->file('draft_kerjasama');
            // $filename = time() . '_' . $file->getClientOriginalName();
            // $dokumen = new \App\Models\Dokumen;
            // $dokumen->nama_file = $filename;
            // $dokumen->save();

            // Setelah pengiriman berhasil, Anda bisa melakukan redirect ke halaman lain.
            // Misalnya, halaman konfirmasi.
            return redirect('/konfirmasi');
        });

        Route::get('/permohonan/bukti', [BuktiController::class, 'showBuktiPermohonan'])->name('permohonan.bukti');
        Route::post('/simpan_bukti_permohonan', [BuktiController::class, 'simpanBuktiPermohonan']);

        // Route::get('/simpan', function () {
        //     return view('permohonan.simpan');
        // })->name('simpan');
        Route::get('/permohonan/simpan', [SimpanController::class, 'showSimpanPermohonan'])->name('permohonan.simpan');
    });
});
