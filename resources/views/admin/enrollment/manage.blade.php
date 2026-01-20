@extends('admin.template')

@section('content')

<table class="table">
    <tr>
        <td>id</td>
        <td>course</td>
        <td>student name</td>
        <td>detail</td>
    </tr>
    @foreach ($enrollments as $enrollment)
        <tr>
            <td>{{ $enrollment->id }}</td>
            <td>{{ $enrollment->course->title }}</td>
            <td>{{ $enrollment->student->name }}</td>
            <td><a href="{{ route('get-admin-detail-enrollment', ['id' => $enrollment->id]) }}">detail</a></td>
        </tr>
    @endforeach
</table>

@endsection
