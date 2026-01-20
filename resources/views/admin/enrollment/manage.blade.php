@extends('admin.template')

@section('content')

<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark">
            📋 Enrollment List
        </h3>
    </div>

    <!-- Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Course</th>
                            <th>Student Name</th>
                            <th class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enrollments as $enrollment)
                            <tr>
                                <td class="fw-semibold">{{ $enrollment->id }}</td>
                                <td>{{ $enrollment->course->title }}</td>
                                <td>{{ $enrollment->student->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('get-admin-detail-enrollment', ['id' => $enrollment->id]) }}"
                                       class="btn btn-sm btn-outline-primary">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        @if ($enrollments->count() === 0)
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                    Tidak ada data enrollment
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection
