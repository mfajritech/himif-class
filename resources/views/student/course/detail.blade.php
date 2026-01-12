<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>detail course</h1>
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
        <tr>
            <td>end date</td>
            <td>{{ $course->end_date ?? 'Belum Berakhir' }}</td>
        </tr>
        <tr>
            <td>status</td>
            <td>{{ $course->is_active == true ? 'Berlangsung' : 'Belum Berlangsung' }}</td>
        </tr>
    </table>
    <a href="{{ route('get-student-enroll-courses', ['id' => $course->id]) }}">daftar course ini</a>
</body>
</html>
