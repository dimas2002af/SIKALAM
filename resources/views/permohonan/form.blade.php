@extends('layouts.app') @section('title', 'SIKALAM - Form Permohonan') @section('content')

<style>
    label {
        font-weight: bold;
    }
    .form-background {
        background-color: #F3F3F3;
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center">Masukkan Data Anda</h2>

    <div class="form-background">
        <form action="{{ route('permohonan.submit') }}" method="post" class="mt-5">
            @csrf
            <!-- Laravel CSRF token -->
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-3 col-form-label">NIK:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nik" name="nik" required="required">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama:</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="nama"
                                name="nama"
                                required="required">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="instansi" class="col-sm-3 col-form-label">Instansi:</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="instansi"
                                name="instansi"
                                required="required">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan:</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="jabatan"
                                name="jabatan"
                                required="required">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nomor_hp" class="col-sm-3 col-form-label">Nomor HP:</label>
                        <div class="col-sm-9">
                            <input
                                type="tel"
                                class="form-control"
                                id="nomor_hp"
                                name="nomor_hp"
                                required="required">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                required="required">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mt-4">Pilih Jenis Dokumen</h2>

        <div class="form-background">
            <form action="{{ route('permohonan.submit') }}" method="post" class="mt-5">
                @csrf
                <!-- Laravel CSRF token -->
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <div class="mb-3 row">
                            <label for="dokumen" class="col-sm-3 col-form-label">Jenis Dokumen:</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="dokumen" name="dokumen" required="required">
                                    <option value="" disabled="disabled" selected="selected">Pilih Jenis Dokumen</option>
                                    <option value="Kesepakatan Bersama">Kesepakatan Bersama</option>
                                    <option value="Nota Kesepakatan">Nota Kesepakatan</option>
                                    <option value="Perjanjian Kerjasama">Perjanjian Kerjasama</option>
                                    <option value="Rencana Kerja">Rencana Kerja</option>
                                    <option value="Adendum Perjanjian Kerjasama">Adendum Perjanjian Kerjasama</option>
                                    <option value="Adendum Rencana Kerja">Adendum Rencana Kerja</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Selanjutnya</button>
            </div>
        </form>

    </div>
    @endsection