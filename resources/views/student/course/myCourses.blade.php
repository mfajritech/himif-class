@extends('student.template')

@section('content')

    <div class="container my-5">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">📚 My Courses</h2>
                <p class="text-muted mb-0">
                    Daftar course yang sedang atau pernah Anda ikuti
                </p>
            </div>
        </div>

        <!-- EMPTY STATE -->
        @if (count($myCourses) === 0)
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center py-5">
                    <div class="fs-1 mb-3">📭</div>
                    <h5 class="fw-semibold">Belum Ada Course</h5>
                    <p class="text-muted">
                        Anda belum terdaftar pada course manapun.
                    </p>
                    <a href="{{ route('get-student-courses') }}" class="btn btn-primary mt-2">
                        Cari Course
                    </a>
                </div>
            </div>
        @else
            <!-- COURSE TABLE -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Course</th>
                                    <th>Coach</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($myCourses as $course)
                                    <tr>
                                        <td class="fw-semibold">
                                            {{ $course->title }}
                                        </td>
                                        <td>
                                            {{ $course->coach->name }}
                                        </td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Course</th>
                                    <th>Coach</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($myCoursesPending as $course)
                                    <tr>
                                        <td class="fw-semibold">
                                            {{ $course->title }}
                                        </td>
                                        <td>
                                            {{ $course->coach->name }}
                                        </td>
                                        <td><span class="badge bg-warning">Menunggu</span></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif

    </div>

@endsection
