@extends('layouts.app')

@section('title', 'SIKALAM - Dashboard')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Gambar Ilustrasi -->
        <div class="col-md-6">
            <img src="/images/home.png" alt="Ilustrasi SIKALAM" class="img-fluid">
        </div>
        <!-- Deskripsi dan Tombol Permohonan -->
        <div class="col-md-6" style="text-align: center; margin-top: 10%;">
            <h2>SISTEM INFORMASI KERJASAMA DAERAH LAMONGAN</h2>
            <p style="color: #0578B9;">SIKALAM (Sistem Informasi Kerjasama Daerah Lamongan) dirancang untuk mempercepat
                pengurusan
                kerjasama di Lamongan. SIKALAM mendorong akuntabilitas proses fasilitasi kerja sama daerah
                dan menyediakan informasi kerja sama daerah di Lamongan bagi publik.</p>
                @if(Auth::check()) <!-- Menampilkan tombol tambahkan permohonan hanya jika pengguna sudah login -->
                    <a href="{{ route('permohonan.form') }}"><button class="btn-permohonan">Tambahkan Permohonan</button></a>
                @else <!-- Menampilkan peringatan jika pengguna belum login -->
                    <div class="alert alert-danger" role="alert">
                        Silakan login terlebih dahulu untuk menambahkan permohonan kerjasama.
                    </div>
                @endif
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div id="faq-section" class="container mt-4 faq-section">
    <h2 style="color: white; text-align:center;">Apa yang bisa kami bantu?<br>Punya pertanyaan? kami bisa membantu</h2>
    <form class="form-inline my-2 my-lg-0" id="searchForm">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari pertanyaan..."
            aria-label="Search" id="searchInput">
    </form>
    <!-- Daftar pertanyaan dan jawaban FAQ -->
    <div class="accordion" id="faqAccordion">
    <div class="card">
            <div class="card-header" id="heading1">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1"
                aria-expanded="true" aria-controls="collapse1">Apa itu Sistem Informasi Kerjasama Daerah Lamongan
                </button>
            </h2>
            </div>

            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#faqAccordion">
                <div class="card-body">SIKALAM adalah rangkaian proses dan alat 
                yang digunakan untuk mengelola informasi terkait kerjasama antara 
                pemerintah daerah atau entitas terkait di suatu wilayah.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading2">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2"
                aria-expanded="false" aria-controls="collapse2">Apa tujuan dari SIKERDAL
                </button>
            </h2>
            </div>

            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faqAccordion">
                <div class="card-body">Tujuan utama SIKERDAL adalah memfasilitasi pertukaran 
                    informasi yang efektif dan efisien antara pihak-pihak yang terlibat dalam kerjasama daerah.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading3">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse3"
                aria-expanded="true" aria-controls="collapse3">Apa manfaat yang dapat diperoleh dari implementasi SIKERDAL?
                </button>
            </h2>
            </div>

            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#faqAccordion">
                <div class="card-body">Implementasi SIKALAM dapat memberikan manfaat seperti peningkatan 
                  kolaborasi antara pemerintah daerah, efisiensi pengelolaan informasi, pemantauan dan 
                  evaluasi kerjasama yang lebih baik, serta pengambilan keputusan yang lebih akurat.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading4">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse4"
                aria-expanded="true" aria-controls="collapse4">Apakah SIKALAM hanya relevan bagi pemerintah daerah?
                </button>
            </h2>
            </div>

            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#faqAccordion">
                <div class="card-body">Meskipun SIKERDAL umumnya digunakan oleh pemerintah daerah, konsep dan 
                  prinsip yang terkait dapat diterapkan dalam kerjasama antara berbagai entitas seperti 
                  lembaga pemerintah, organisasi non-pemerintah, dan sektor swasta.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading5">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse5"
                aria-expanded="true" aria-controls="collapse5">Apa jenis informasi yang dapat dikelola SIKALAM?
                </button>
            </h2>
            </div>

            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#faqAccordion">
                <div class="card-body">SIKALAM dapat mengelola berbagai jenis informasi terkait kerjasama daerah, 
                  seperti data proyek, laporan kemajuan, informasi keuangan, dokumen kontrak, dan informasi terkait 
                  pihak-pihak yang terlibat dalam kerjasama.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading6">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse6"
                aria-expanded="true" aria-controls="collapse6">Bagaimana keamanan informasi dijaga dalam SIKALAM?
                </button>
            </h2>
            </div>

            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#faqAccordion">
                <div class="card-body">Keamanan informasi dalam SIKALAM dijaga melalui penggunaan metode dan 
                  teknologi keamanan seperti otentikasi pengguna, enkripsi data, kontrol akses, serta penerapan
                   kebijakan keamanan dan privasi yang sesuai.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading7">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse7"
                aria-expanded="true" aria-controls="collapse7">Apa manfaat yang dapat diperoleh dari implementasi SIKALAM?
                </button>
            </h2>
            </div>

            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#faqAccordion">
                <div class="card-body">Beberapa tantangan yang mungkin dihadapi dalam implementasi SIKALAM 
                  meliputi kebutuhan akan dukungan dan komitmen dari semua pihak terlibat, masalah keamanan data, 
                  integrasi sistem yang kompleks, serta kesenjangan kompetensi dan pemahaman pengguna.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading8">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse8"
                aria-expanded="true" aria-controls="collapse8">Bagaimana pihak-pihak yang terlibat dalam kerjasama dapat mengakses dan berpartisipasi dalam SIKALAM?
                </button>
            </h2>
            </div>

            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#faqAccordion">
                <div class="card-body">Pihak-pihak yang terlibat dalam kerjasama dapat mengakses dan berpartisipasi 
                  dalam SIKALAM melalui izin akses yang diberikan, biasanya dengan menggunakan akun pengguna yang unik 
                  untuk setiap pihak
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
