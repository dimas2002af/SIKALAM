@extends('layouts.app')

@section('title', 'SIKALAM - Entry Data')

@section('content')
<style>
        form {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        /* File CSS kustom untuk menyesuaikan tombol dengan radius sudut */
        .rounded-button {
            border-radius: 30px; /* Atur besar radius sudut sesuai keinginan */
            padding: 10px 20px;
            font-size: 16px;
        }
        .form-group{
            margin-bottom: 10px;
            width: 100%;
        }
    /* Kode CSS lainnya */
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <h3>Lengkapi Data</h3>
                </div>

                <div style="color: black;" class="card-body">
                    <form action="{{ route('entry_data.submit') }}" method="post">
                        @csrf
                        <div style="font-weight: bold;">Jenis dokumen : {{ session('jenis_dokumen') }}</div>

                        <!-- Bidang -->
                        <div class="form-group">
                            <label style="font-weight: bold;">Bidang</label>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_1" name="bidang[]" value="Mencakup Semua Bidang"> Mencakup Semua Bidang</td>
                                        <td><input type="checkbox" id="bidang_2" name="bidang[]" value="Administrasi pendudukan &amp; Capil"> Administrasi pendudukan &amp; Capil</td>
                                        <td><input type="checkbox" id="bidang_3" name="bidang[]" value="Mencakup Semua Bidang"> Mencakup Semua Bidang</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_4" name="bidang[]" value="Pertanahan"> Pertanahan</td>
                                        <td><input type="checkbox" id="bidang_5" name="bidang[]" value="Ketenteraman, Ketertiban"> Ketenteraman, Ketertiban</td>
                                        <td><input type="checkbox" id="bidang_6" name="bidang[]" value="Pekerjaan Umum"> Pekerjaan Umum</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_7" name="bidang[]" value="Penataan Ruang"> Penataan Ruang</td>
                                        <td><input type="checkbox" id="bidang_8" name="bidang[]" value="Perumahan Rakyat"> Perumahan Rakyat</td>
                                        <td><input type="checkbox" id="bidang_9" name="bidang[]" value="Permukiman"> Permukiman</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_10" name="bidang[]" value="Perhubungan"> Perhubungan</td>
                                        <td><input type="checkbox" id="bidang_11" name="bidang[]" value="Komunikasi &amp; Informatika"> Komunikasi &amp; Informatika</td>
                                        <td><input type="checkbox" id="bidang_12" name="bidang[]" value="Statistik"> Statistik</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_13" name="bidang[]" value="Perpustakaan"> Perpustakaan</td>
                                        <td><input type="checkbox" id="bidang_14" name="bidang[]" value="Persandian"> Persandian</td>
                                        <td><input type="checkbox" id="bidang_15" name="bidang[]" value="Lingkungan Hidup"> Lingkungan Hidup</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_16" name="bidang[]" value="Energi &amp; SD Mineral"> Energi &amp; SD Mineral</td>
                                        <td><input type="checkbox" id="bidang_17" name="bidang[]" value="Kehutanan"> Kehutanan</td>
                                        <td><input type="checkbox" id="bidang_18" name="bidang[]" value="Kepegawaian"> Kepegawaian</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_19" name="bidang[]" value="Transmigrasi"> Transmigrasi</td>
                                        <td><input type="checkbox" id="bidang_20" name="bidang[]" value="Tenaga Kerja"> Tenaga Kerja</td>
                                        <td><input type="checkbox" id="bidang_21" name="bidang[]" value="Pangan"> Pangan</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_22" name="bidang[]" value="Koprasi &amp; UKM"> Koprasi &amp; UKM</td>
                                        <td><input type="checkbox" id="bidang_23" name="bidang[]" value="Penamaan Modal"> Penamaan Modal</td>
                                        <td><input type="checkbox" id="bidang_24" name="bidang[]" value="Kelautan &amp; Perikanan"> Kelautan &amp; Perikanan</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_25" name="bidang[]" value="Pertanian"> Pertanian</td>
                                        <td><input type="checkbox" id="bidang_26" name="bidang[]" value="Perdagangan"> Perdagangan</td>
                                        <td><input type="checkbox" id="bidang_27" name="bidang[]" value="Perindustrian"> Perindustrian</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_28" name="bidang[]" value="Pariwisata"> Pariwisata</td>
                                        <td><input type="checkbox" id="bidang_29" name="bidang[]" value="Budaya"> Budaya</td>
                                        <td><input type="checkbox" id="bidang_30" name="bidang[]" value="Kepemudaan &amp; Olahraga"> Kepemudaan &amp; Olahraga</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_31" name="bidang[]" value="Pengendalian Penduduk &amp; KB"> Pengendalian Penduduk &amp; KB</td>
                                        <td><input type="checkbox" id="bidang_32" name="bidang[]" value="Pemberdayaan Masyarakat &amp; Kelurahan"> Pemberdayaan Masyarakat &amp; Kelurahan</td>
                                        <td><input type="checkbox" id="bidang_33" name="bidang[]" value="Pemberdayaan Perempuan &amp; PA"> Pemberdayaan Perempuan &amp; PA</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="bidang_34" name="bidang[]" value="Sosial"> Sosial</td>
                                        <td><input type="checkbox" id="bidang_35" name="bidang[]" value="Pendidikan"> Pendidikan</td>
                                        <td><input type="checkbox" id="bidang_36" name="bidang[]" value="Kesehatan"> Kesehatan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Penanda Tangan -->
                        <div class="form-group">
                            <label style="font-weight: bold;">Penanda Tangan / Para Pihak</label>
                            <i><br>Nama Jabatan ditulis Lengkap, misal:
                                <br>Bupati Kabupaten Lamongan
                                <br>Kepala Dinas Komunikasi dan Informatika Kabupaten Lamongan
                            </i>
                            <br><br>
                            <div class="field">
                                <button type="button" onclick="addField()">Add Field</button>
                                <button type="button" onclick="removeField()">Remove Field</button>
                                <div id="fieldContainer">
                                    <!-- Field pertama (default) -->
                                    <br>
                                    <div class="field">
                                        <input type="text" name="penanda_tangan[]" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Judul/Perihal/Tentang -->
                        <div class="form-group">
                            <label style="font-weight: bold;">Judul/Perihal/Tentang</label>
                            <textarea name="perihal_dokumen" class="form-control" rows="3" required></textarea>
                        </div>

                        <!-- Masa Berlaku Kerja Sama -->
                        <div class="form-group">
                            <label style="font-weight: bold;">Masa Berlaku Kerjasama</label>
                            <select name="masa_berlaku" class="form-control" required>
                                <option selected>Masa Berlaku</option>
                                <option value="1 tahun">1 tahun</option>
                                <option value="2 tahun">2 tahun</option>
                                <option value="3 tahun">3 tahun</option>
                                <option value="4 tahun">4 tahun</option>
                                <option value="5 tahun">5 tahun</option>
                            </select>
                        </div>

                        <!-- Button Simpan Data -->
                        <div class="text-center mt-4">
                            <button type="submit" name="submitEntry" class="btn btn-primary">Selanjutnya</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let fieldCounter = 1;

    function addField() {
        fieldCounter++;
        const fieldDiv = document.createElement("div");
        fieldDiv.className = "field";
        fieldDiv.innerHTML = `
            <input type="text" name="penanda_tangan[]" placeholder="Field ${fieldCounter}">
            <button type="button" onclick="removeField(this)">Remove</button>
        `;
        document.getElementById("fieldContainer").appendChild(fieldDiv);
    }

    function removeField(button) {
        const fieldDiv = button.parentElement;
        fieldDiv.remove();
    }
</script>
@endsection
