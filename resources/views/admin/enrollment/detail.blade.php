@extends('admin.template')

@section('content')

<div class="container my-5">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-primary mb-1">
                Persetujuan Pendaftaran Course
            </h3>
            <p class="text-muted mb-0">
                Tinjau data mahasiswa sebelum menyetujui atau menolak pendaftaran
            </p>
        </div>

        <a href="{{ route('get-admin-enrollment') }}" class="btn btn-outline-secondary">
            ← Kembali
        </a>
    </div>

    <!-- CARD -->
    <div class="card border-0 shadow-lg">
        <div class="card-body p-5">

            <!-- STATUS -->
            <div class="mb-4">
                <span class="text-muted me-2">Status Saat Ini:</span>

                @if ($enrollment->status === 'pending')
                    <span class="badge bg-warning text-dark px-3 py-2">
                        Menunggu Persetujuan
                    </span>
                @elseif ($enrollment->status === 'accepted')
                    <span class="badge bg-success px-3 py-2">
                        Disetujui
                    </span>
                @elseif ($enrollment->status === 'rejected')
                    <span class="badge bg-danger px-3 py-2">
                        Ditolak
                    </span>
                @else
                    <span class="badge bg-secondary px-3 py-2">
                        Tidak Diketahui
                    </span>
                @endif
            </div>

            <div class="row g-4">

                <!-- STUDENT INFO -->
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3">👤 Data Mahasiswa</h5>

                    <div class="border rounded-3 p-4 bg-light">
                        <div class="mb-3">
                            <small class="text-muted">Nama Mahasiswa</small>
                            <div class="fw-semibold fs-5">
                                {{ $enrollment->student->name }}
                            </div>
                        </div>

                        <div>
                            <small class="text-muted">Nomor HP</small>
                            <div class="fw-semibold">
                                {{ $enrollment->student->phone }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- COURSE INFO -->
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3">📘 Data Course</h5>

                    <div class="border rounded-3 p-4 bg-light">
                        <div class="mb-3">
                            <small class="text-muted">Judul Course</small>
                            <div class="fw-semibold fs-5">
                                {{ $enrollment->course->title }}
                            </div>
                        </div>

                        <a href="{{ route('get-admin-detail-course', ['id' => $enrollment->course->id]) }}"
                           class="btn btn-outline-primary btn-sm">
                            Lihat Detail Course
                        </a>
                    </div>
                </div>

            </div>

            <!-- ACTION -->
            @if ($enrollment->status === 'pending')
                <div class="mt-5 pt-4 border-top d-flex justify-content-end gap-3">

                    <a href="{{ route('get-admin-reject-enrollment', ['id' => $enrollment->id]) }}"
                       class="btn btn-outline-danger px-4"
                       onclick="return confirm('Yakin ingin menolak pendaftaran ini?')">
                        Tolak
                    </a>

                    <a href="{{ route('get-admin-accept-enrollment', ['id' => $enrollment->id]) }}"
                       class="btn btn-success px-4"
                       onclick="return confirm('Yakin ingin menyetujui pendaftaran ini?')">
                        Terima
                    </a>

                </div>
            @endif

        </div>
    </div>

</div>

@endsection
