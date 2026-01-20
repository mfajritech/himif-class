@extends('student.template')

@section('content')
    <h1>konfirmasi</h1>
    <p>anda akan mengambil kelas:</p>
     <table>
        <tr>
            <td>id</td>
            <td>{{ $course->id }}</td>
        </tr>
        <tr>
            <td>title</td>
            <td>{{ $course->title }}</td>
        </tr>
        <tr>
            <td>coach</td>
            <td>{{ $course->coach->name }}</td>
        </tr>
        <tr>
            <td>description</td>
            <td>{{ $course->description }}</td>
        </tr>
        <tr>
            <td>total_meetings</td>
            <td>{{ $course->total_meetings }}</td>
        </tr>
        <tr>
            <td>meeting_duration</td>
            <td>{{ $course->meeting_duration }}</td>
        </tr>
        <tr>
            <td>schedule_day</td>
            <td>{{ $course->schedule_day }}</td>
        </tr>
    </table>
    <form action="{{ route('post-student-enroll-courses') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $course->id }}">
        <button type="submit">daftar</button>
    </form>
</body>
</html>
@endsection
