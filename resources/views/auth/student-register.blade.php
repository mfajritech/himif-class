<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif

    <form action="{{ route('post-register') }}" method="POST">
        @csrf
        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <label for="name">name</label>
        <input type="text" name="name" id="name">

        <label for="nim">nim</label>
        <input type="text" name="nim" id="nim">

        <label for="phone">phone</label>
        <input type="text" name="phone" id="phone">

        <label for="password">password</label>
        <input type="text" name="password" id="password">

        <label for="ver_password">ver_password</label>
        <input type="text" name="ver_password" id="ver_password">

        <button type="submit">kirim</button>
    </form>
</body>
</html>
