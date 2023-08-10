<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKALAM - Simpan Bukti Permohonan Kerja Sama</title>
    <link rel="shortcut icon" href="/images/title.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            margin-top: 20px; /* Add spacing above the button */
            margin-bottom: 40px; /* Add spacing below the button */
        }
        .info-text {
            color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity */
            font-size: 15px;
            text-align: left; /* Align the text to the left */
            
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center">Bukti Permohonan Kerja Sama</h2>

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
                                <input type="text" class="form-control" id="draft_kerjasama" name="draft_kerjasama" value="{{ $uploadDokumen->draft_kerjasama }}" readonly>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="dokumen_pendukung" class="col-sm-5 col-form-label">Dokumen Pendukung:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="dokumen_pendukung" name="dokumen_pendukung" value="{{ $uploadDokumen->dokumen_pendukung }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Text above the button -->
        <div class="text-left mt-4 info-text">
            <ul style="list-style-type: disc; padding-left: 20px;">
                <ul style="list-style-type: disc; padding-left: 0px;">*Note :</ul>
                <li>Diterbitkan oleh aplikasi SIKERDAL sebagai bukti Anda telah mengajukan permohonan kerjasama.</li>
                <li>Simpan bukti ini dan informasikan kepada penyelenggara kerjasama dalam negeri Biro Tapem Setda LA agar segera diproses.</li>
            </ul>
        </div>

        <div class="text-left mt-8">
            <button type="button" class="btn btn-simpan" onclick="saveScreen()">Simpan</button>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <script>
        function saveScreen() {
            // Capture the container element using html2canvas
            html2canvas(document.querySelector(".container")).then(function (canvas) {
                // Convert canvas to data URL
                var image = canvas.toDataURL("image/png");

                // Create a link element to download the image
                var link = document.createElement("a");
                link.download = "bukti_permohonan_kerja_sama.png"; // Set the filename for the downloaded image
                link.href = image;
                link.click();
            });
        }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    -->
</body>
</html>
