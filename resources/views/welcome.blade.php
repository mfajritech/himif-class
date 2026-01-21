<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMIF Class | Learning Platform</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">
            <i class="bi bi-mortarboard-fill me-1"></i> HIMIF Class
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#features">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary rounded-pill px-4"
                       href="{{ route('get-login') }}">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="pt-5 mt-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <h1 class="fw-bold display-5 mb-3">
                    Platform Belajar <span class="text-primary">HIMIF Class</span>
                </h1>
                <p class="text-muted fs-5 mb-4">
                    Program kerja HIMIF Class dalam pengembangan pembelajaran algoritma sebagai bekal dasar mahasiswa di bidang informatika
                </p>

                <div class="d-flex gap-3">
                    <a href="{{ route('get-login') }}"
                       class="btn btn-primary btn-lg rounded-pill px-4">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                    </a>

                    <a href="#features"
                       class="btn btn-outline-secondary btn-lg rounded-pill px-4">
                        <i class="bi bi-info-circle me-1"></i> Pelajari
                    </a>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <i class="bi bi-laptop display-1 text-primary opacity-75"></i>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section id="features" class="py-5 mt-5 bg-white">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Kenapa HIMIF Class?</h2>
            <p class="text-muted">Platform belajar yang dirancang untuk mahasiswa</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-journals fs-1 text-primary"></i>
                        <h5 class="fw-bold mt-3">Manajemen Course</h5>
                        <p class="text-muted small">
                            Kelola dan ikuti course dengan mudah
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-person-video3 fs-1 text-success"></i>
                        <h5 class="fw-bold mt-3">Coach Profesional</h5>
                        <p class="text-muted small">
                            Belajar langsung dari coach terbaik
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-speedometer2 fs-1 text-warning"></i>
                        <h5 class="fw-bold mt-3">Cepat & Efisien</h5>
                        <p class="text-muted small">
                            Antarmuka modern dan responsif
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Siap Mulai Belajar?</h2>
        <p class="opacity-75 mb-4">
            Masuk dan mulai eksplor course sekarang juga
        </p>
        <a href="{{ route('get-login') }}"
           class="btn btn-light btn-lg rounded-pill px-5 fw-semibold">
            Login Sekarang
        </a>
    </div>
</section>

<!-- FOOTER -->
<footer class="py-4 bg-white border-top">
    <div class="container text-center text-muted small">
        © {{ date('Y') }} HIMIF Class · All Rights Reserved
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
