<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Dashboard</h1>
    <a href="{{ route('get-logout') }}">LOGOUT</a>
    <hr>
    <h3>my courses</h3>
    <a href="{{ route('get-student-my-courses') }}">myCOurses</a>
    <a href="{{ route('get-student-courses') }}">COurses</a>
    <p>total class yg diambil: {{ count($enrollments) }}</p>
</body>
</html>
