@extends('admin.template')

@section('content')

<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">
            🛠️ Admin Dashboard
        </h2>
        <a href="{{ route('get-logout') }}" class="btn btn-danger">
            Logout
        </a>
    </div>

    <!-- Dashboard Cards -->
    <div class="row g-4">

        <!-- Manage Courses -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3 text-primary">📚</div>
                    <h5 class="card-title fw-semibold">Manage Courses</h5>
                    <p class="text-muted">
                        Tambah, edit, dan kelola data course
                    </p>
                    <a href="{{ route('get-admin-manage-course') }}"
                       class="btn btn-primary w-100">
                        Open
                    </a>
                </div>
            </div>
        </div>

        <!-- Manage Coaches -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3 text-success">👨‍🏫</div>
                    <h5 class="card-title fw-semibold">Manage Coaches</h5>
                    <p class="text-muted">
                        Kelola data coach dan instruktur
                    </p>
                    <a href="{{ route('get-admin-manage-coach') }}"
                       class="btn btn-success w-100">
                        Open
                    </a>
                </div>
            </div>
        </div>

        <!-- Manage Students -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3 text-warning">🎓</div>
                    <h5 class="card-title fw-semibold">Manage Students</h5>
                    <p class="text-muted">
                        Kelola data mahasiswa / siswa
                    </p>
                    <a href="{{ route('get-admin-manage-student') }}"
                       class="btn btn-warning w-100">
                        Open
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
