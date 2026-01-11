<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | HIMIF Class</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <div class="text-center mb-4">
                        <i class="bi bi-person-plus-fill text-primary fs-1"></i>
                        <h4 class="fw-bold mt-2">Register HIMIF Class</h4>
                        <p class="text-muted mb-0">Lengkapi data untuk membuat akun</p>
                    </div>

                    {{-- Error --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('post-register') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope-fill me-1"></i>Email
                            </label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                <i class="bi bi-person-fill me-1"></i>Name
                            </label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">
                                <i class="bi bi-card-text me-1"></i>NIM
                            </label>
                            <input type="text" name="nim" id="nim" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">
                                <i class="bi bi-telephone-fill me-1"></i>Phone
                            </label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="bi bi-lock-fill me-1"></i>Password
                            </label>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="ver_password" class="form-label">
                                <i class="bi bi-shield-lock-fill me-1"></i>Verify Password
                            </label>
                            <input type="text" name="ver_password" id="ver_password" class="form-control">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary rounded-pill fw-semibold py-2">
                                <i class="bi bi-send-fill me-1"></i> Kirim
                            </button>
                        </div>
                    </form>

                    <p class="text-center text-muted mt-4 mb-0">
                        © {{ date('Y') }} HIMIF
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
