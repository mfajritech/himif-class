@extends('student.template')

@section('content')

<div class="container py-5">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-0">
                <i class="bi bi-journal-check text-primary me-1"></i>
                My Courses
            </h3>
            <small class="text-muted">
                Daftar course yang sedang kamu ikuti
            </small>
        </div>

        <a href="{{ route('get-student-courses') }}"
           class="btn btn-primary rounded-pill fw-semibold">
            <i class="bi bi-plus-circle-fill me-1"></i> Ambil Course
        </a>
    </div>

    <!-- CARD -->
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">

                    @if (count($myCourses) == 0)
                        <tr>
                            <td class="text-center text-muted py-5">
                                <i class="bi bi-info-circle fs-3 d-block mb-2"></i>
                                Kamu belum mengambil course
                            </td>
                        </tr>
                    @else
                        <thead class="table-light">
                            <tr>
                                <th>Course</th>
                                <th>Coach</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $status = [];
                                foreach ($enrollments as $enroll) {
                                    $status[$enroll->course['id']] = $enroll->status;
                                }
                            @endphp

                            @foreach ($myCourses as $course)
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

                                    <!-- STATUS -->
                                    <td class="text-center">
                                        @php
                                            $courseStatus = $status[$course->id];
                                        @endphp

                                        @if ($courseStatus == 'active')
                                            <span class="badge bg-success rounded-pill px-3">
                                                <i class="bi bi-play-circle-fill me-1"></i> Aktif
                                            </span>
                                        @elseif ($courseStatus == 'completed')
                                            <span class="badge bg-primary rounded-pill px-3">
                                                <i class="bi bi-check-circle-fill me-1"></i> Selesai
                                            </span>
                                        @else
                                            <span class="badge bg-secondary rounded-pill px-3">
                                                <i class="bi bi-clock-fill me-1"></i> Menunggu
                                            </span>
                                        @endif
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
            Total course diikuti: <strong>{{ count($myCourses) }}</strong>
        </small>
    </div>

</div>

@endsection
