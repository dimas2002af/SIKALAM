@extends('layouts.app') @section('title', 'SIKALAM - Bukti Permohonan Kerja Sama') @section('content')

    <style>
        label {
            font-weight: bold;
        }
        .btn-simpan {
            background-color: #0578B9;
            color: white;
            border-radius: 100px;
            font-weight: bold;
            width: 150px;
        }

        .btn-back {
            background-color: #9FE459;
            color: white;
            border-radius: 100px;
            font-weight: bold; 
            width: 150px;
        }
    </style>


    <div class="container mt-5">
        <h2 class="text-left">Bukti Permohonan Kerja Sama</h2>

        <div class="form-background">
            <form action="/submit_permohonan" method="post" class="mt-5">
                @csrf <!-- Laravel CSRF token -->
                <div class="row justify-content-left">
                    <div class="col-sm-7">
                        <div class="mb-3 row">
                            <label for="kode_permohonan" class="col-sm-5 col-form-label">Kode Permohonan:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="kode" name="kode" value="{{ $permohonan->kode }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="created_at" class="col-sm-5 col-form-label">Tanggal Pengajuan:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $permohonan->created_at->format('Y-m-d H:i:s') }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-5 col-form-label">Nama Pemohon:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $permohonan->nama }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nik" class="col-sm-5 col-form-label">NIK Pemohon:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nik" name="nik" value="{{ $permohonan->nik }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="instansi" class="col-sm-5 col-form-label">Instansi Pemohon:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="instansi" name="instansi" value="{{ $permohonan->instansi }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jabatan" class="col-sm-5 col-form-label">Jabatan Pemohon:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $permohonan->jabatan }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nomor_hp" class="col-sm-5 col-form-label">HP Pemohon:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="{{ $permohonan->nomor_hp }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-5 col-form-label">Email Pemohon:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" name="email" value="{{ $permohonan->email }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis_dokumen" class="col-sm-5 col-form-label">Jenis Permohonan:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="jenis_dokumen" name="jenis_dokumen" value="{{ $permohonan->jenis_dokumen }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="perihal_dokumen" class="col-sm-5 col-form-label">Perihal/Tentang:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="perihal_dokumen" name="perihal_dokumen" value="{{ $entryData->perihal_dokumen }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="bidang" class="col-sm-5 col-form-label">Bidang:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="bidang" name="bidang" value="{{ $entryData->bidang }}" readonly>
                            </div>
                        </div>
                        <!--// -->
                        <div class="mb-3 row">
                            <label for="masa_berlaku" class="col-sm-5 col-form-label">Jangka Waktu:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="masa_berlaku" name="masa_berlaku" value="{{ $entryData->masa_berlaku }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="penanda_tangan" class="col-sm-5 col-form-label">Para Pihak:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="penanda_tangan" name="penanda_tangan" value="{{ $entryData->penanda_tangan }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="draft_kerjasama" class="col-sm-5 col-form-label">Draft Kerjasama:</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="draft_kerjasama" name="draft_kerjasama" value="{{ $uploadDokumen->draft_kerjasama }}" readonly>
                                    <div class="input-group-append">
                                        <a href="{{ ($uploadDokumen->draft_kerjasama) }}" class="input-group-text" target="_blank">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="dokumen_pendukung" class="col-sm-5 col-form-label">Dokumen Pendukung:</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="dokumen_pendukung" name="dokumen_pendukung" value="{{ $uploadDokumen->dokumen_pendukung }}" readonly>
                                    <div class="input-group-append">
                                        <a href="{{ ($uploadDokumen->dokumen_pendukung) }}" class="input-group-text" target="_blank">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div class="text-center mt-8">
            <button type="button" class="btn btn-simpan" onclick="redirectToSimpan()">Simpan</button>
            <a href="{{ route('permohonan.upload') }}" class="btn btn-back">Back</a>
        </div>
    </div>


    <script>
        function redirectToSimpan() {
            window.location.href = "/permohonan/simpan"; // Replace with the actual URL of simpan.blade.php
        }
    </script>
    @endsection
