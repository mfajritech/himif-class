@extends('admin.template')

@section('content')

<div class="container">


    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">
                <i class="bi bi-person-video3 text-primary me-1"></i>
                Coach Manager
            </h3>
            <small class="text-muted">Kelola data coach HIMIF Class</small>
        </div>

        <a href="{{ route('get-admin-add-coach') }}"
           class="btn btn-primary rounded-pill fw-semibold">
            <i class="bi bi-plus-circle-fill me-1"></i> Add Coach
        </a>
    </div>


    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">

                    @if(count($coaches) == 0)
                        <tr>
                            <td class="text-center text-muted py-4">
                                <i class="bi bi-info-circle fs-4"></i><br>
                                Belum ada Coach
                            </td>
                        </tr>
                    @else
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coaches as $coach)
                                <tr>
                                    <td class="fw-semibold">{{ $coach->id }}</td>
                                    <td>{{ $coach->name }}</td>
                                    <td>{{ $coach->phone }}</td>
                                    <td>{{ $coach->user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('get-admin-detail-coach', ['id' => $coach->id]) }}"
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
