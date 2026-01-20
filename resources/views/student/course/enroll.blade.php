@extends('student.template')

@section('content')

<div class="container my-5">

    <!-- Judul -->
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">
            Konfirmasi Pendaftaran Course
        </h2>
        <p class="text-muted">
            Silakan periksa kembali informasi course berikut sebelum melanjutkan proses pendaftaran.
        </p>
    </div>

    <!-- Card Konfirmasi -->
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">

                    <h4 class="fw-bold mb-3">
                        {{ $course->title }}
                    </h4>

                    <p class="text-muted mb-4">
                        {{ $course->description }}
                    </p>

                    <!-- Detail Course -->
                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">ID Course</div>
                        <div class="col-md-8 fw-semibold">
                            {{ $course->id }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Coach / Pengajar</div>
                        <div class="col-md-8">
                            {{ $course->coach->name }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Total Pertemuan</div>
                        <div class="col-md-8">
                            {{ $course->total_meetings }} pertemuan
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 text-muted">Durasi Pertemuan</div>
                        <div class="col-md-8">
                            {{ $course->meeting_duration }} menit / pertemuan
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4 text-muted">Hari Pelaksanaan</div>
                        <div class="col-md-8">
                            {{ $course->schedule_day }}
                        </div>
                    </div>

                    <!-- Penegasan -->
                    <div class="alert alert-warning">
                        Dengan menekan tombol <strong>Daftar Course</strong>, Anda menyatakan bersedia
                        mengikuti course ini sesuai dengan jadwal dan ketentuan yang berlaku.
                    </div>

                    <!-- Form -->
                    <form action="{{ route('post-student-enroll-courses') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $course->id }}">

                        <div class="d-flex gap-3">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary w-50">
                                Batal dan Kembali
                            </a>

                            <button type="submit" class="btn btn-primary w-50 fw-bold">
                                Daftar Course
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
