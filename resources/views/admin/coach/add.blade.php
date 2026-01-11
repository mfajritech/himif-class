<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Coach | HIMIF Class</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">

    <div class="text-center mb-5">
        <i class="bi bi-person-plus-fill fs-1 text-primary"></i>
        <h3 class="fw-bold mt-2">Tambah Coach</h3>
        <p class="text-muted mb-0">Form pendaftaran coach baru</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">

    
            @if ($errors->any())
                <div class="alert alert-danger shadow-sm rounded-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

         
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <form action="{{ route('post-admin-add-coach') }}" method="POST">
                        @csrf

                   
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">
                                <i class="bi bi-person-fill me-1"></i>Nama Coach
                            </label>
                            <input type="text"
                                   name="name"
                                   id="name"
                                   class="form-control rounded-3"
                                   placeholder="Masukkan nama coach"
                                   value="{{ old('name') }}">
                        </div>

              
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">
                                <i class="bi bi-envelope-fill me-1"></i>Email
                            </label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="form-control rounded-3"
                                   placeholder="Masukkan email"
                                   value="{{ old('email') }}">
                        </div>

                    
                        <div class="mb-4">
                            <label for="phone" class="form-label fw-semibold">
                                <i class="bi bi-telephone-fill me-1"></i>Nomor Telepon
                            </label>
                            <input type="text"
                                   name="phone"
                                   id="phone"
                                   class="form-control rounded-3"
                                   placeholder="Masukkan nomor telepon"
                                   value="{{ old('phone') }}">
                        </div>

                      
                        <div class="d-flex justify-content-end">
                            <button type="submit"
                                    class="btn btn-primary rounded-pill fw-semibold px-4">
                                <i class="bi bi-send-fill me-1"></i> Simpan Coach
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>
 