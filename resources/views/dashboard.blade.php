<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subvasi - Submissions Inovasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
body {
    font-family: 'Poppins', sans-serif;
}

:root {
    --primary: #000000;
    --secondary: #3d1ad9;
    --accent: #e74c3c;
    --light: #ecf0f1;
}

.navbar .nav-item {
    list-style: none; 
}

.navbar .nav-link {
    position: relative;
    text-decoration: none !important; 
    transition: color 0.3s ease;
}

.navbar .nav-link::after {
    content: "";
    position: absolute;
    bottom: -2px; 
    left: 0;
    width: 0;
    height: 2px;
    background-color: var(--secondary); 
    transition: width 0.3s ease;
}

.navbar .nav-link:hover::after,
.navbar .nav-link.active::after {
    width: 100%;
}


.hero-section {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    padding: 100px 0;
    height: 90vh;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: -70px;
    right: -70px;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
}

.hero-section::after {
    content: '';
    position: absolute;
    bottom: -80px;
    left: -80px;
    width: 250px;
    height: 250px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
}

.feature-icon {
    font-size: 2.5rem;
    color: var(--secondary);
    margin-bottom: 1rem;
}
.btn-outline-primary {
    color: var(--secondary);
    border-color: var(--secondary);
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-outline-primary:hover {
    background-color: var(--secondary);
    color: white;
    transform: translateY(-4px);
}

.step-number {
    width: 50px;
    height: 50px;
    background-color: var(--secondary);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.5rem;
    margin: 0 auto 1rem;
}

footer {
    background-color: var(--primary);
    color: white;
}

/* Typography */
h1,h2,h3,h4,h5 {
    font-weight: 700;
}

h1 {
    font-size: 2.8rem;
    margin-bottom: 1.5rem;
}

h2 {
    font-size: 2.2rem;
    margin-bottom: 1rem;
}

.lead {
    font-size: 1.25rem;
    margin-bottom: 2rem;
}


.card {
    border: none;
    border-radius: 10px;
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}


.cta-section {
    background-color: var(--secondary);
    color: white;
    padding: 80px 0;
}

.hero-logo {
    max-width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .hero-section {
        height: auto;
        padding: 80px 0;
        text-align: center;
    }
    
    h1 {
        font-size: 2.2rem;
    }
    
    .lead {
        font-size: 1.1rem;
    }
    
    .hero-content {
        order: 2;
        margin-top: 2rem;
    }
    
    .hero-logo-container {
        order: 1;
    }
}

@media (max-width: 576px) {
    h1 {
        font-size: 1.8rem;
    }
    
    h2 {
        font-size: 1.6rem;
    }
    
    .hero-section {
        padding: 60px 0;
    }
    
    .btn-primary, .btn-outline-primary {
        padding: 10px 20px;
        font-size: 0.9rem;
        display: block;
        margin: 0.5rem auto;
        width: 80%;
    }
}


#home, #tentang, #cara-kerja, #kontak {
    scroll-margin-top: 80px;
}


.navbar-toggler:focus,
.navbar-toggler:active {
    outline: none;
    box-shadow: none;
}

.nav-item.dropdown .nav-link::after {
    display: none;
}


    </style>
</head>

<body>
<!-- Navbar --> 
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="/">
            <i class="bi bi-lightbulb"></i> SUBVASI
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cara-kerja">Cara Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>

                <!-- Dropdown Profile -->
                @auth
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" 
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->profile->foto ?? 'https://via.placeholder.com/40' }}" 
                             alt="Profile" class="rounded-circle me-2" width="50    " height="50">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile_detail">Profile</a></li>
                        <li>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth

                @guest
                <li class="nav-item ms-2">
                    <a class="btn btn-outline-primary" href="/login">Login</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>



    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center">
                <!-- Konten teks -->
                <div class="col-lg-7 col-md-6 hero-content order-lg-1 order-2">
                    <h1 class="display-4 fw-bold">Wadah untuk Inovasi Brilian Anda</h1>
                    <p class="lead mb-4">Subvasi adalah platform yang memudahkan Anda untuk mengajukan, berbagi, dan
                        mengembangkan ide-ide inovatif yang dapat membawa perubahan positif.</p>

                    <div class="d-flex flex-wrap gap-2">
                        @guest
                            <a href="/register" class="btn btn-outline-primary btn-lg">Daftar Sekarang</a>
                            <a href="/login" class="btn btn-outline-primary btn-lg">Login</a>
                        @endguest

                        @auth
                            <a href="/pengajuan" class="btn btn-outline-primary btn-lg">Ajukan Inovasi</a>
                        @endauth
                    </div>
                </div>

                <!-- Gambar logo -->
                <div class="col-lg-5 col-md-6 hero-logo-container order-lg-2 order-1 text-center">
                    <img src="{{ asset('images/test.png') }}"
                        alt="Subvasi Logo" class="hero-logo img-fluid mb-4 mb-md-0" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

   <!-- About Section -->
<section class="py-5 bg-light" id="tentang">
  <div class="container">
    <div class="row text-center mb-5">
      <div class="col">
        <h2>Tentang Subvasi</h2>
        <p class="lead">
          Subvasi adalah platform pengajuan inovasi yang memudahkan masyarakat untuk
          berbagi ide-ide kreatif, berkolaborasi, dan mengembangkan inovasi
          yang bermanfaat bagi banyak orang. Website ini hadir untuk menjadi jembatan
          antara inovator dengan pihak-pihak yang siap mendukung ide mereka.
        </p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm border-0">

        </div>
      </div>
    </div>
  </div>
</section>

    <section class="py-5 bg-light" id="cara-kerja">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>Cara Mengajukan Inovasi</h2>
                    <p class="lead">Hanya perlu 3 langkah mudah untuk mengajukan inovasi Anda</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <div class="text-center">
                        <div class="step-number">1</div>
                        <h4>Registrasi</h4>
                        <p>Daftarkan akun Anda secara gratis di platform Subvasi.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="text-center">
                        <div class="step-number">2</div>
                        <h4>Lengkapi Profil</h4>
                        <p>Lengkapi profil Anda untuk membangun kredibilitas.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="text-center">
                        <div class="step-number">3</div>
                        <h4>Ajukan Inovasi</h4>
                        <p>Isi formulir pengajuan inovasi dengan detail dan jelas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-white"><i class="bi bi-lightbulb"></i> SUBVASI</h5>
                    <p class="text-white">Platform pengajuan inovasi untuk menampung dan mengembangkan ide-ide brilian
                        yang dapat membawa perubahan positif.</p>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5 class="text-white">Tautan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="#tentang" class="text-white text-decoration-none">Tentang</a></li>
                        <li><a href="#cara-kerja" class="text-white text-decoration-none">Cara Kerja</a></li>
                        <li><a href="#inovasi" class="text-white text-decoration-none">Inovasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white">Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="text-white"><i class="bi bi-envelope me-2"></i> info@subvasi.id</li>
                        <li class="text-white"><i class="bi bi-telephone me-2"></i> (021) 1234-5678</li>
                        <li class="text-white"><i class="bi bi-geo-alt me-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white">Ikuti Kami</h5>
                    <div class="d-flex">
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white me-3 fs-5"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col text-center">
                    <p class="text-white">© 2023 Subvasi. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
@if(session('success'))
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Berhasil!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        {{ session('success') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary text-white" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        var myModal = new bootstrap.Modal(document.getElementById('successModal'));
        myModal.show();
    });
</script>
@endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>