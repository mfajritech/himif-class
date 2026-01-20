@extends('student.template')

@section('content')

    <h1>courses</h1>

    <table>
        @if (count($courses) == 0)
            <tr>Belum ada course</tr>
        @else
            <thead>
                <tr>
                    <td>title</td>
                    <td>coach</td>
                    <td>meeting total</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->coach->name }}</td>
                    <td>{{ $course->total_meetings }}</td>
                    <td><a href="{{ route('get-student-detail-courses', ['id' => $course->id]) }}">detail</a></td>
                </tr>
                @endforeach
            </tbody>
        @endif
    </table>
</body>
</html>

@endsection
