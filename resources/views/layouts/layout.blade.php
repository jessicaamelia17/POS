<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SmartPOS')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body dengan tinggi minimal penuh layar */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Minimal setinggi viewport */
        }

        /* Navbar dengan efek gradient */
        .custom-navbar {
            background: linear-gradient(135deg, #6a11cb, #2575fc, #c5c1c1); /* Ungu ke biru ke putih */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Footer dengan efek gradient */
        .custom-footer {
            background: linear-gradient(135deg, #6a11cb, #2575fc, #c5c1c1); /* Sama seperti navbar */
            color: white;
            padding: 15px 0;
            box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Agar teks menu navbar lebih jelas */
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
        }

        /* Agar tombol aktif di navbar terlihat */
        .navbar-nav .nav-link:hover {
            color: #ffd700 !important; /* Warna emas saat hover */
        }

        /* Buat konten tumbuh ke atas dan tetap tengah */
        .main-content {
            flex-grow: 1; /* Konten akan berkembang sesuai kebutuhan */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}">SmartPOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sales.index') }}">Sales</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('category.index') }}">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.profile', ['id' => 1, 'name' => 'Jessica Amelia']) }}">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="custom-footer text-center mt-5">
        <p>&copy; 2025 SmartPOS. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
