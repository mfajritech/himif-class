<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>add coach</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif
    <form action="{{ route('post-admin-add-coach') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="name">name</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="email">email</label></td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="phone">phone</label></td>
                <td><input type="text" name="phone" id="phone"></td>
            </tr>
            <tr>
                <td><button type="submit">kirim</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
