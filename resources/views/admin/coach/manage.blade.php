<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>coach manager</h1>
    <a href="{{ route('get-admin-add-coach') }}">add</a>

    <hr>
    <table>
        @if (count($coaches) == 0)
            <tr>Belum ada coaches</tr>
        @else
            <thead>
                <tr>
                    <td>id</td>
                    <td>email</td>
                    <td>name</td>
                    <td>phone</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($coaches as $coach)
                <tr>
                    <td>{{ $coach->id }}</td>
                    <td>{{ $coach->user->email }}</td>
                    <td>{{ $coach->name }}</td>
                    <td>{{ $coach->phone }}</td>
                </tr>
                @endforeach
            </tbody>
        @endif
    </table>
</body>
</html>
