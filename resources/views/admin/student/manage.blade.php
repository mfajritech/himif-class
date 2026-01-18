@extends('admin.template')

@section('content')

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

@endsection
