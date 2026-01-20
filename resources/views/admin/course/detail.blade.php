@extends('admin.template')
@section('content')

<div class="container">


    <div class="text-center mb-5">
        <i class="bi bi-journal-bookmark-fill fs-1 text-primary"></i>
        <h3 class="fw-bold mt-2">Detail Course</h3>
        <p class="text-muted mb-0">Informasi lengkap course HIMIF Class</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">


            <div class="card shadow-lg border-0 rounded-4 mb-4">
                <div class="card-body p-4 p-md-5">

                    <table class="table table-borderless mb-0">
                        <tr>
                            <td class="fw-semibold text-muted" style="width: 35%;">
                                <i class="bi bi-hash me-1"></i>ID
                            </td>
                            <td class="fw-semibold">
                                {{ $course->id }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-journal-text me-1"></i>Title
                            </td>
                            <td>
                                {{ $course->title }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-person-video3 me-1"></i>Coach
                            </td>
                            <td>
                                <a href="{{ route('get-admin-detail-coach', ['id' => $course->coach_id]) }}"
                                   class="text-decoration-none fw-semibold">
                                    {{ $course->coach->name }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-card-text me-1"></i>Description
                            </td>
                            <td>
                                {{ $course->description }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-collection me-1"></i>Total Meetings
                            </td>
                            <td>
                                {{ $course->total_meetings }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-clock-history me-1"></i>Meeting Duration
                            </td>
                            <td>
                                {{ $course->meeting_duration }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-calendar-week me-1"></i>Schedule Day
                            </td>
                            <td>
                                {{ $course->schedule_day }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-calendar-x me-1"></i>End Date
                            </td>
                            <td>
                                {{ $course->end_date ?? 'Belum Berakhir' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-semibold text-muted">
                                <i class="bi bi-info-circle-fill me-1"></i>Status
                            </td>
                            <td>
                                <span class="badge {{ $course->is_active ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $course->is_active ? 'Berlangsung' : 'Belum Berlangsung' }}
                                </span>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>


            <div class="d-flex justify-content-end">
                <a href="{{ route('get-admin-edit-course', ['id' => $course->id]) }}"
                   class="btn btn-warning rounded-pill fw-semibold">
                    <i class="bi bi-pencil-square me-1"></i> Edit Course
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
@endsection
