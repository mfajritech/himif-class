<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | HIMIF Class</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-4 col-sm-10">

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">

                <div class="text-center mb-4">
                    <i class="bi bi-mortarboard-fill fs-1 text-primary"></i>
                    <h4 class="fw-bold mt-2">HIMIF Class</h4>
                    <p class="text-muted mb-0">Silakan login untuk melanjutkan</p>
                </div>

        
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('post-login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="text" 
                                   name="email" 
                                   class="form-control"
                                   placeholder="Masukkan email">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>
                            <input type="password" 
                                   name="password" 
                                   class="form-control"
                                   placeholder="Masukkan password">
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary rounded-pill fw-semibold">
                            Login
                        </button>
                    </div>
                </form>

                
                <div class="text-center">
                    <span class="text-muted">Belum punya akun?</span>
                    <a href="{{ route('get-register') }}" class="fw-semibold text-decoration-none">
                        Daftar di sini
                    </a>
                </div>

                <div class="text-center mt-4">
                    <small class="text-muted">
                        © {{ date('Y') }} HIMIF
                    </small>
                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>
