<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>detail coach</h1>
    <table>
        <tr>
            <td>id</td>
            <td>{{ $coach->id }}</td>
        </tr>
        <tr>
            <td>name</td>
            <td>{{ $coach->name }}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{ $coach->user->email }}</td>
        </tr>
        <tr>
            <td>phone</td>
            <td>{{ $coach->phone }}</td>
        </tr>
    </table>
    <form action="{{ route('post-admin-delete-coach') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $coach->id }}">
        <button type="submit">hapus</button>
    </form>
    <a href="{{ route('get-admin-edit-coach', ['id' => $coach->id]) }}">edit</a>

    <h1>courses</h1>
    <table>
        @if (count($courses) == 0)
            <tr>Belum ada course yang dibimbing.</tr>
        @else
            <tr>
                <td>name</td>
                <td>detail</td>
            </tr>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                </tr>
            @endforeach
        @endif

    </table>
</body>
</html>
