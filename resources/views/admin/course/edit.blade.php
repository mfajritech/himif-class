@extends('admin.template')

@section('content')

<div class="container">


    <div class="text-center mb-5">
        <i class="bi bi-pencil-square fs-1 text-warning"></i>
        <h3 class="fw-bold mt-2">Edit Course</h3>
        <p class="text-muted mb-0">Perbarui informasi course</p>
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

                    <form action="{{ route('post-admin-edit-course') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-hash me-1"></i>ID Course
                            </label>
                            <input type="text"
                                   name="id"
                                   class="form-control rounded-3 bg-light"
                                   value="{{ $course->id }}"
                                   readonly>
                        </div>


                        <div class="mb-3">

                            <input type="hidden"
                                   name="is_active"
                                   class="form-control rounded-3 bg-light"
                                   value="{{ $course->is_active  }}"
                                   readonly>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">
                                <i class="bi bi-journal-text me-1"></i>Judul Course
                            </label>
                            <input type="text"
                                   name="title"
                                   id="title"
                                   class="form-control rounded-3"
                                   value="{{ $course->title }}">
                        </div>


                        <div class="mb-3">
                            <label for="coach_id" class="form-label fw-semibold">
                                <i class="bi bi-person-video3 me-1"></i>Coach
                            </label>
                            <select name="coach_id" id="coach_id" class="form-select rounded-3">
                                <option value="{{ $course->coach_id }}">
                                    {{ $course->coach->name }}
                                </option>
                                @foreach ($coaches as $coach)
                                    @if ($coach->id != $course->coach_id)
                                        <option value="{{ $coach->id }}">
                                            {{ $coach->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">
                                <i class="bi bi-card-text me-1"></i>Deskripsi
                            </label>
                            <textarea name="description"
                                      id="description"
                                      rows="3"
                                      class="form-control rounded-3">{{ $course->description }}</textarea>
                        </div>


                        <div class="mb-3">
                            <label for="total_meetings" class="form-label fw-semibold">
                                <i class="bi bi-collection me-1"></i>Total Pertemuan
                            </label>
                            <input type="number"
                                   name="total_meetings"
                                   id="total_meetings"
                                   class="form-control rounded-3"
                                   value="{{ $course->total_meetings }}">
                        </div>


                        <div class="mb-3">
                            <label for="meeting_duration" class="form-label fw-semibold">
                                <i class="bi bi-clock-history me-1"></i>Durasi Pertemuan (menit)
                            </label>
                            <input type="number"
                                   name="meeting_duration"
                                   id="meeting_duration"
                                   class="form-control rounded-3"
                                   value="{{ $course->meeting_duration }}">
                        </div>


                        <div class="mb-4">
                            <label for="schedule_day" class="form-label fw-semibold">
                                <i class="bi bi-calendar-week me-1"></i>Jadwal Pertemuan
                            </label>
                            <textarea name="schedule_day"
                                      id="schedule_day"
                                      class="form-control rounded-3"
                                      rows="2">{{ $course->schedule_day }}</textarea>
                        </div>


                        <div class="d-flex justify-content-between">
                            <a href="{{ route('get-admin-detail-course', ['id' => $course->id]) }}"
                               class="btn btn-outline-secondary rounded-pill">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>

                            <button type="submit"
                                    class="btn btn-warning text-white rounded-pill fw-semibold px-4">
                                <i class="bi bi-save-fill me-1"></i> Update Course
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
