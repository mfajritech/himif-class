<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>student manager</h1>
    <table>
        @if(count($students) == 0)
            <tr>
                <td>Belum ada Student</td>
            </tr>
        @else
            <tr>
                <td>nim</td>
                <td>nama</td>
                <td>phone</td>
                <td>email</td>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->user->email }}</td>
                    <td><a href="{{ route('get-admin-detail-student', ['nim' => $student->nim]) }}">detail</a></td>
                </tr>
            @endforeach
        @endif
    </table>
</body>
</html>
