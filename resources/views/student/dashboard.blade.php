@extends('student.template')

@section('content')

<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            🎓 Student Dashboard
        </h2>
        <a href="{{ route('get-logout') }}" class="btn btn-danger">
            Logout
        </a>
    </div>

    <!-- Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h5 class="card-title mb-3">
                📚 My Courses
            </h5>

            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <a href="{{ route('get-student-my-courses') }}" class="btn btn-primary w-100">
                        My Courses
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="{{ route('get-student-courses') }}" class="btn btn-success w-100">
                        Browse Courses
                    </a>
                </div>
            </div>

            <!-- Stats -->
            <div class="alert alert-info mb-0">
                Total kelas yang diambil:
                <strong>{{ count($enrollments) }}</strong>
            </div>

        </div>
    </div>

</div>

@endsection
