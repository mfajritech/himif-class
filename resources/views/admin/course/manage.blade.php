<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses List | HIMIF Class</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">

 
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">
                <i class="bi bi-journal-bookmark-fill text-primary me-1"></i>
                Courses List
            </h3>
            <small class="text-muted">Daftar course HIMIF Class</small>
        </div>

        <a href="{{ route('get-admin-add-course') }}"
           class="btn btn-primary rounded-pill fw-semibold">
            <i class="bi bi-plus-circle-fill me-1"></i> Add Course
        </a>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    @if (count($courses) == 0)
                        <tr>
                            <td class="text-center text-muted py-4">
                                <i class="bi bi-info-circle fs-4"></i><br>
                                Belum ada course
                            </td>
                        </tr>
                    @else
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Coach</th>
                                <th>Total Meeting</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td class="fw-semibold">{{ $course->title }}</td>
                                    <td>{{ $course->coach->name }}</td>
                                    <td>{{ $course->total_meetings }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('get-admin-detail-course', ['id' => $course->id]) }}"
                                           class="btn btn-sm btn-outline-primary rounded-pill">
                                            <i class="bi bi-eye-fill"></i> Detail
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif

                </table>
            </div>

        </div>
    </div>

</div>

</body>
</html>
