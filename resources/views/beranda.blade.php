<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Custom CSS -->
    <link href="resources/css/styles.css" rel="stylesheet"/>
    <style>
        .hero-section {
            background-image: url("{{ Vite::asset('public/images/login_image.jpg')}}");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center; 
            color: white; 
            position: relative; 
}
    </style>
    @vite([
            'resources/css/app.css',
            'resources/css/styles.css',
            ])
</head>
<body>
<!-- Navbar & Hero Start -->
<div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex align-items-center">
            <img src="{{ Vite::asset('public/images/logo.png') }}" alt="Logo" class="logo">
            <div>
                <span class="brand-name">SIASMA</span><br>
                <span class="brand-subtitle">SISTEM INFORMASI ALUMNI SMAN 1 PONTIANAK</span>
            </div>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                        @guest
                        <a href="{{ route('beranda') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                        @endguest

                        @auth
                        <a href="{{ route('beranda') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ route('biodata') }}" class="nav-item nav-link">Biodata</a>
                        <a href="service.html" class="nav-item nav-link">Berita</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link">Profil</a>
                        @endauth
                </div>
            </nav>
</div>




    <section class="hero-section">
        <div class="overlay"></div>
        <div class="content flex-grow-1">
            <h2 class="headline">Selamat Datang di SIASMA!</h2>
            <p class="tagline">Temukan Jejak, Sambung Kembali</p>
            <div class="container-search">
                <form class="search-box d-flex w-100">
                    <div class="input-group flex-grow-1">
                        <input class="form-control" type="search" placeholder="Keyword: [Nama Siswa] [Tahun Lulus] [Universitas] [Program Studi]" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<!-- Include Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>