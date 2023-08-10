@extends('layouts.app')

@section('title', 'SIKALAM - Upload File')

@section('content')
    <style>
        .form-background {
            background-color: #F3F3F3;
            padding: 20px;
            border-radius: 10px;
        }

        label {
            font-weight: bold;
        }

        /* CSS untuk tombol "Choose File" */
        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border: 1px solid #25B5E9;
            background-color: #25B5E9;
            color: white;
            padding: 8px 20px;
            border-radius: 100px; /* Corner radius 100 */
            cursor: pointer;
            display: inline-block;
            margin-left: 10px;
            text-align: center; /* Teks di tengah tombol */
            width: 300px; /* Lebar tombol */
        }

        .custom-file-upload:hover {
            background-color: #0E82B7;
        }

        /* CSS untuk tombol "Kirim Permohonan" */
        .btn-kirim-permohonan {
            background-color: #9FE459;
            color: white;
            padding: 8px 20px;
            border-radius: 100px;
            cursor: pointer;
            display: block;
            margin: 0 auto; /* Memposisikan tombol ke tengah */
            font-weight: bold; /* Format bold */
            width: 200px;
        }

        .btn-kirim-permohonan:hover {
            background-color: #86C534;
        }

        /* CSS untuk tulisan "(doc/pdf)" */
        .doc-pdf-label {
            font-weight: normal; /* Tidak bold */
            color: rgba(0, 0, 0, 0.45); /* Warna transparan */
            display: inline-block;
            vertical-align: middle;
            margin-left: 5px; /* Jarak antara tulisan dan tombol "Choose File" */
        }
    </style>

<div class="container mt-5">
        <h2 class="text-center">Kirim Dokumen</h2>

        <div class="form-background">
            <form action="/submit_draft" method="post" class="mt-5" enctype="multipart/form-data">
                @csrf <!-- Laravel CSRF token -->
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <div class="mb-3 row">
                            <label for="draft_kerjasama" class="col-sm-6 col-form-label">Draft Kerja Sama:</label>
                            <div class="col-sm-6">
                                <label class="custom-file-upload">
                                    Upload Draft Kerjasama
                                    <input type="file" id="draft_kerjasama" name="draft_kerjasama" accept=".doc,.docx,.pdf" required>
                                </label>
                                <span class="doc-pdf-label">*Format file doc/pdf</span>
                                <div id="draft_kerjasama_title" style="display:none;font-weight:bold;"></div> <!-- Penampil judul dokumen -->
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="dokumen_pendukung" class="col-sm-6 col-form-label">Dokumen Pendukung:</label>
                            <div class="col-sm-6">
                                <label class="custom-file-upload">
                                    Upload Dokumen Pendukung
                                    <input type="file" id="dokumen_pendukung" name="dokumen_pendukung" accept=".doc,.docx,.pdf" required>
                                </label>
                                <span class="doc-pdf-label">*Format file doc/pdf</span>
                                <div id="dokumen_pendukung_title" style="display:none;font-weight:bold;"></div> <!-- Penampil judul dokumen -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-kirim-permohonan">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Tampilkan judul dokumen saat dokumen dipilih
        const draftKerjasamaInput = document.getElementById('draft_kerjasama');
        draftKerjasamaInput.addEventListener('change', function() {
            const draftKerjasamaTitle = document.getElementById('draft_kerjasama_title');
            draftKerjasamaTitle.innerText = 'Judul Dokumen: ' + draftKerjasamaInput.files[0].name;
            draftKerjasamaTitle.style.display = 'block';
        });

        const dokumenPendukungInput = document.getElementById('dokumen_pendukung');
        dokumenPendukungInput.addEventListener('change', function() {
            const dokumenPendukungTitle = document.getElementById('dokumen_pendukung_title');
            dokumenPendukungTitle.innerText = 'Judul Dokumen: ' + dokumenPendukungInput.files[0].name;
            dokumenPendukungTitle.style.display = 'block';
        });
    </script>

@endsection
