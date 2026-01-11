<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>courses list</h1>
    <a href="{{ route('get-admin-add-course') }}">add</a>
    <hr>
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
                    <td><a href="{{ route('get-admin-detail-course', ['id' => $course->id]) }}">detail</a></td>
                </tr>
                @endforeach
            </tbody>
        @endif
    </table>
</body>
</html>
