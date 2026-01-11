<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Coach | HIMIF Class</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">

 
    <div class="text-center mb-5">
        <i class="bi bi-person-gear fs-1 text-warning"></i>
        <h3 class="fw-bold mt-2">Edit Coach</h3>
        <p class="text-muted mb-0">Perbarui informasi coach</p>
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

                    <form action="{{ route('post-admin-edit-coach') }}" method="POST">
                        @csrf

                      
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-hash me-1"></i>ID Coach
                            </label>
                            <input type="text"
                                   name="id"
                                   class="form-control rounded-3 bg-light"
                                   value="{{ $coach->id }}"
                                   readonly>
                        </div>

                       
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">
                                <i class="bi bi-person-fill me-1"></i>Nama 
                            </label>
                            <input type="text"
                                   name="name"
                                   id="name"
                                   class="form-control rounded-3"
                                   value="{{ $coach->name }}">
                        </div>

                    
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-envelope-fill me-1"></i>Email
                            </label>
                            <input type="text"
                                   name="email"
                                   class="form-control rounded-3 bg-light"
                                   value="{{ $coach->user->email }}"
                                   readonly>
                        </div>

                      
                        <div class="mb-4">
                            <label for="phone" class="form-label fw-semibold">
                                <i class="bi bi-telephone-fill me-1"></i>Nomor Telepon
                            </label>
                            <input type="text"
                                   name="phone"
                                   id="phone"
                                   class="form-control rounded-3"
                                   value="{{ $coach->phone }}">
                        </div>

                      
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('get-admin-detail-coach', ['id' => $coach->id]) }}"
                               class="btn btn-outline-secondary rounded-pill">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>

                            <button type="submit"
                                    class="btn btn-warning text-white rounded-pill fw-semibold px-4">
                                <i class="bi bi-save-fill me-1"></i> Update Coach
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
