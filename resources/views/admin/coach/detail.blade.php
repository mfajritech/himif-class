<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Coach | HIMIF Class</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">

    <!-- Header -->
    <div class="text-center mb-5">
        <i class="bi bi-person-badge-fill fs-1 text-primary"></i>
        <h3 class="fw-bold mt-2">Detail Coach</h3>
        <p class="text-muted mb-0">Informasi lengkap coach HIMIF Class</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">

            <!-- Detail Coach -->
            <div class="card shadow-lg border-0 rounded-4 mb-4">
                <div class="card-body p-4 p-md-5">

                    <table class="table table-borderless mb-0">
                        <tr>
                            <td class="fw-semibold text-muted" style="width: 35%;">
                                <i class="bi bi-hash me-1"></i>ID
                            </td>
                            <td class="fw-semibold">
                                {{ $coach->id }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-person-fill me-1"></i>Nama
                            </td>
                            <td>
                                {{ $coach->name }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-envelope-fill me-1"></i>Email
                            </td>
                            <td>
                                {{ $coach->user->email }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-telephone-fill me-1"></i>Phone
                            </td>
                            <td>
                                {{ $coach->phone }}
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

            <!-- Delete Action -->
            <div class="d-flex justify-content-end mb-5">
                <form action="{{ route('post-admin-delete-coach') }}" method="POST"
                      onsubmit="return confirm('Yakin ingin menghapus coach ini?');">
                    @csrf
                    <input type="hidden" name="id" value="{{ $coach->id }}">
                    <button type="submit" class="btn btn-danger rounded-pill fw-semibold">
                        <i class="bi bi-trash-fill me-1"></i> Hapus Coach
                    </button>
                </form>
            </div>

            <!-- Courses Section -->
            <div class="card shadow border-0 rounded-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-journal-bookmark-fill me-1 text-primary"></i>
                        Course yang Dibimbing
                    </h5>

                    @if (count($courses) == 0)
                        <p class="text-muted mb-0">
                            Belum ada course yang dibimbing.
                        </p>
                    @else
                        <ul class="list-group list-group-flush">
                            @foreach ($courses as $course)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span class="fw-semibold">
                                        {{ $course->title }}
                                    </span>
                                    <a href="{{ route('get-admin-detail-course', ['id' => $course->id]) }}"
                                       class="btn btn-sm btn-outline-primary rounded-pill">
                                        <i class="bi bi-eye-fill"></i> Detail
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>
