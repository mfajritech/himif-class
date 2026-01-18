@extends('student.template')

@section('content')

    <h1>Student Dashboard</h1>
    <a href="{{ route('get-logout') }}">LOGOUT</a>
    <hr>
    <h3>my courses</h3>
    <a href="{{ route('get-student-my-courses') }}">myCOurses</a>
    <a href="{{ route('get-student-courses') }}">COurses</a>
    <p>total class yg diambil: {{ count($enrollments) }}</p>
</body>
</html>

@endsection
