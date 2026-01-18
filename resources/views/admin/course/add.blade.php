@extends('admin.template')

@section('content')

<div class="container">


    <div class="text-center mb-5">
        <i class="bi bi-plus-circle-fill fs-1 text-primary"></i>
        <h3 class="fw-bold mt-2">Tambah Course</h3>
        <p class="text-muted mb-0">Form pembuatan course baru</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-7">


            @if ($errors->any())
                <div class="alert alert-danger shadow-sm rounded-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <form action="{{ route('post-admin-add-course') }}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">
                                <i class="bi bi-journal-text me-1"></i>Judul Course
                            </label>
                            <input type="text" name="title" id="title"
                                   class="form-control rounded-3"
                                   placeholder="Masukkan judul course"
                                   value="{{ old('title') }}">
                        </div>


                        <div class="mb-3">
                            <label for="coach_id" class="form-label fw-semibold">
                                <i class="bi bi-person-video3 me-1"></i>Coach
                            </label>
                            <select name="coach_id" id="coach_id" class="form-select rounded-3">
                                <option value="">-- Pilih Coach --</option>
                                @foreach ($coaches as $coach)
                                    <option value="{{ $coach->id }}"
                                        {{ old('coach_id') == $coach->id ? 'selected' : '' }}>
                                        {{ $coach->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">
                                <i class="bi bi-card-text me-1"></i>Deskripsi
                            </label>
                            <textarea name="description" id="description"
                                      class="form-control rounded-3"
                                      rows="3"
                                      placeholder="Deskripsi course">{{ old('description') }}</textarea>
                        </div>


                        <div class="mb-3">
                            <label for="total_meetings" class="form-label fw-semibold">
                                <i class="bi bi-collection me-1"></i>Total Pertemuan
                            </label>
                            <input type="number" name="total_meetings" id="total_meetings"
                                   class="form-control rounded-3"
                                   placeholder="Jumlah pertemuan"
                                   value="{{ old('total_meetings') }}">
                        </div>


                        <div class="mb-3">
                            <label for="meeting_duration" class="form-label fw-semibold">
                                <i class="bi bi-clock-history me-1"></i>Durasi Pertemuan (menit)
                            </label>
                            <input type="number" name="meeting_duration" id="meeting_duration"
                                   class="form-control rounded-3"
                                   placeholder="Durasi dalam menit"
                                   value="{{ old('meeting_duration') }}">
                        </div>


                        <div class="mb-4">
                            <label for="schedule_day" class="form-label fw-semibold">
                                <i class="bi bi-calendar-week me-1"></i>Jadwal Pertemuan
                            </label>
                            <textarea name="schedule_day" id="schedule_day"
                                      class="form-control rounded-3"
                                      rows="2"
                                      placeholder="Contoh: Senin & Rabu">{{ old('schedule_day') }}</textarea>
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit"
                                    class="btn btn-primary rounded-pill fw-semibold px-4">
                                <i class="bi bi-send-fill me-1"></i> Simpan Course
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>

@endsection
