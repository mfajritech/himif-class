@extends('student.template')

@section('content')
    <h1>my courses</h1>

    <table>
        @if (count($myCourses) == 0)
            <tr>
                <td>belum ada course</td>
            </tr>
        @else
            <tr>
                <td>title</td>
                <td>coach</td>
            </tr>   
            @foreach ($myCourses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->coach->name }}</td>
                </tr>
            @endforeach
        @endif
    </table>
</body>
</html>
@endsection
