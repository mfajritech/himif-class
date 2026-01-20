@extends('student.template')

@section('content')

<div class="container py-5">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">
                <i class="bi bi-journal-bookmark-fill text-primary me-1"></i>
                Courses
            </h3>
            <small class="text-muted">
                Daftar course yang tersedia untuk diikuti
            </small>
        </div>
    </div>

    <!-- CARD -->
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    @if (count($courses) == 0)
                        <tr>
                            <td class="text-center text-muted py-5">
                                <i class="bi bi-info-circle fs-3 d-block mb-2"></i>
                                Belum ada course tersedia
                            </td>
                        </tr>
                    @else
                        <thead class="table-light">
                            <tr>
                                <th>Course</th>
                                <th>Coach</th>
                                <th>Total Pertemuan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <!-- COURSE -->
                                    <td>
                                        <div class="fw-semibold">
                                            {{ $course->title }}
                                        </div>
                                        <small class="text-muted">
                                            ID: {{ $course->id }}
                                        </small>
                                    </td>

                                    <!-- COACH -->
                                    <td>
                                        <i class="bi bi-person-video3 me-1 text-secondary"></i>
                                        {{ $course->coach->name }}
                                    </td>

                                    <!-- MEETING -->
                                    <td>
                                        <span class="badge bg-light text-dark rounded-pill px-3">
                                            <i class="bi bi-collection me-1"></i>
                                            {{ $course->total_meetings }}x
                                        </span>
                                    </td>

                                    <!-- ACTION -->
                                    <td class="text-center">
                                        <a href="{{ route('get-student-detail-courses', ['id' => $course->id]) }}"
                                           class="btn btn-sm btn-outline-primary rounded-pill px-3">
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

    <!-- FOOTER INFO -->
    <div class="text-center mt-4">
        <small class="text-muted">
            Total course tersedia: <strong>{{ count($courses) }}</strong>
        </small>
    </div>

</div>

@endsection
