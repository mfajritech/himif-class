<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Manager | HIMIF Class</title>

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">


    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">
                <i class="bi bi-people-fill text-primary me-1"></i>
               Student Manager
            </h3>
            <small class="text-muted">Kelola data mahasiswa HIMIF Class</small>
        </div>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">

                    @if(count($students) == 0)
                        <tr>
                            <td class="text-center text-muted py-4">
                                <i class="bi bi-info-circle fs-4"></i><br>
                                Belum ada Student
                            </td>
                        </tr>
                    @else
                        <thead class="table-light">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td class="fw-semibold">{{ $student->nim }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('get-admin-detail-student', ['nim' => $student->nim]) }}"
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
