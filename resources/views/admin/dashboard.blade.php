<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>admin dashboard</h1>
    <a href="{{ route('get-logout') }}">LOGOUT</a>
    <a href="{{ route('get-admin-manage-course') }}">manage courses</a>
    <a href="{{ route('get-admin-manage-coach') }}">manage coaches</a>
</body>
</html>
