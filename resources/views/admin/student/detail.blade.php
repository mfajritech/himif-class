<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>detail</h1>

    <table>
        <tr>
            <td>name</td>
            <td>{{ $student->name }}</td>
        </tr>
        <tr>
            <td>nim</td>
            <td>{{ $student->nim }}</td>
        </tr>
        <tr>
            <td>phone</td>
            <td>{{ $student->phone }}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{ $student->user->email }}</td>
        </tr>
    </table>
    <h1>kelas yg diambil</h1>
    
</body>
</html>
