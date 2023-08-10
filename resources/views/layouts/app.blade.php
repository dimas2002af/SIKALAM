<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/images/title.png" type="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .btn-permohonan{
            background-color: #0578B9;
            color: white;
            border-radius: 100px;
            font-weight: bold;
            width: 250px;
            height: 50px;
            margin-top: 20px; /* Add spacing above the button */
            margin-bottom: 20px; /* Add spacing below the button */
            transition-duration: 0.4s;
        }
        .btn-permohonan:hover {
            background-color: #0578B9; /* Green */
            color: black;
        }
        .dropdown-toggle::after {
            content: none; /* Menghapus icon caret */
        }

        .dropdown-menu {
            width: 100%;
            border: none; /* Menghapus border pada dropdown */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Memberi sedikit efek shadow */
            border-radius: 0.375rem; /* Memberi radius pada dropdown */
        }

        .dropdown-item {
            color: #333;
            padding: 8px 20px;
            display: block;
            text-decoration: none;
            transition: background-color 0.2s ease; /* Efek transisi saat hover */
        }

        .dropdown-item:hover {
            background-color: #f0f0f0; /* Efek hover */
        }

        .dropdown-divider {
            margin: 0; /* Menghapus margin pada divider */
            border-top: 1px solid #e3e3e3; /* Garis pemisah */
        }
        .faq-section {
            background-image: url("/images/faq.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            padding: 30px;
        }
        .card {
        background-color: rgba(255, 255, 255, 0.2); /* Ubah nilai transparansi disini (0.7) */
        /* Jika ingin mengatur transparansi di seluruh card, ganti .card dengan .faq-section */
        }
        .card-header button {
        color: white; /* Ubah warna teks */
        }
        .card-body{
            color: white;
        }
        /* CSS untuk mengatur posisi search bar di tengah secara vertikal */
        .faq-section .form-inline {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .faq-section .form-control {
            width: 50%;
            margin-bottom: 20px;
            color: white;
            background-color: rgba(255, 255, 255, 0.2);
        }
        .faq-section .form-control::placeholder {
            color: white;
            opacity: 1;
        }
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
</head>

<body>
    <!-- Navbar -->
    <!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#">
        <img src="/images/logo .png" alt="SIKERDAL Logo" width="180" height="50" class="d-inline-block align-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto" style="margin-right:5%;">
            <li class="nav-item">
                <a class="nav-link" style="font-size: 150%; color:#0578B9; font-weight:bold;" 
                href="{{ route('dashboard.index') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="font-size: 150%; color:#0578B9; font-weight:bold;"
                    href="{{ route('publikasi.index') }}">PUBLIKASI</a>
            </li>
        </ul>
        @auth
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->username }}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <form action="{{ route('logout.perform') }}" method="GET">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login.perform') }}" class="btn btn-outline-success">LOGIN</a>
        @endauth
    </div>
</nav>

<!-- Show status message after logout -->
@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

    <!-- Content Section -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light fw-bolder mt-4 py-3 text-center">
        <div>
            <img src="/images/footer.png" class="img-fluid" style="width: 70%;">
        </div>
        <span style="font-weight: bold;">Diskominfo Kabupaten Lamongan &copy;2023</span>
    </footer>

    <!-- Bootstrap JS dan JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Fungsi untuk mengatur pencarian pertanyaan berdasarkan input dari search box
        function searchQuestions() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const accordionItems = document.querySelectorAll('.accordion .card');

            accordionItems.forEach((item) => {
                const questionText = item.querySelector('button').textContent.toLowerCase();
                if (questionText.includes(searchInput)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Tambahkan event listener untuk memanggil fungsi searchQuestions saat search box diubah
        document.getElementById('searchInput').addEventListener('keyup', searchQuestions);
    </script>
</body>

</html>
