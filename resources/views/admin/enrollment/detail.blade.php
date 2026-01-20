@extends('admin.template')

@section('content')

    <table class="table">
        <tr>
            <td>id</td>
            <td>{{ $enrollment->id }}</td>
        </tr>
        <tr>
            <td>nama</td>
            <td>{{ $enrollment->student->name }}</td>
        </tr>
        <tr>
            <td>hp</td>
            <td>{{ $enrollment->student->phone }}</td>
        </tr>
        <tr>
            <td>course</td>
            <td><a href="{{ route('get-admin-detail-course', ['id' => $enrollment->course->id]) }}">{{ $enrollment->course->title }}</a></td>
        </tr>
        <tr>
            <td>status</td>
            <td>{{ $enrollment->status }}</td>
        </tr>
        <tr>
            <td><a href="{{ route('get-admin-accept-enrollment', ['id' => $enrollment->id]) }}">Terima</a></td>
            <td><a href="{{ route('get-admin-reject-enrollment', ['id' => $enrollment->id]) }}">Tolak</a></td>
        </tr>
    </table>



@endsection
