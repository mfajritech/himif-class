@extends('student.template')

@section('content')

<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark">
            📘 Detail Course
        </h3>
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
            ← Kembali
        </a>
    </div>

    <!-- Card -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">

            <h4 class="fw-bold text-primary mb-3">
                {{ $course->title }}
            </h4>

            <p class="text-muted mb-4">
                {{ $course->description }}
            </p>

            <div class="row mb-3">
                <div class="col-md-4 text-muted">Coach</div>
                <div class="col-md-8 fw-semibold">
                    {{ $course->coach->name }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 text-muted">Total Pertemuan</div>
                <div class="col-md-8">
                    {{ $course->total_meetings }} kali
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 text-muted">Durasi Pertemuan</div>
                <div class="col-md-8">
                    {{ $course->meeting_duration }} menit
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 text-muted">Hari Jadwal</div>
                <div class="col-md-8">
                    {{ $course->schedule_day }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 text-muted">Tanggal Selesai</div>
                <div class="col-md-8">
                    {{ $course->end_date ?? 'Belum Berakhir' }}
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4 text-muted">Status</div>
                <div class="col-md-8">
                    @if ($course->is_active)
                        <span class="badge bg-success">Berlangsung</span>
                    @else
                        <span class="badge bg-secondary">Belum Berlangsung</span>
                    @endif
                </div>
            </div>

            <!-- Action -->
            <div class="d-grid">
                <a href="{{ route('get-student-enroll-courses', ['id' => $course->id]) }}"
                   class="btn btn-primary btn-lg">
                    🚀 Daftar Course Ini
                </a>
            </div>

        </div>
    </div>

</div>

@endsection
