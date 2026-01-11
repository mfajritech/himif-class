<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif
    <form action="{{ route('post-login') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="email">email</label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="text" name="password" id="password"></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">kirim</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
