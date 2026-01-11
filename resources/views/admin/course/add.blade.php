<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>add course</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif
    <form action="{{ route('post-admin-add-course') }}" method="POST">
        @csrf

        <table>
            <tr>
                <td><label for="title">title</label></td>
                <td><input type="text" name="title" id="title"></td>
            </tr>
            <tr>
                <td><label for="coach_id">coach</label></td>
                <td>
                    <select name="coach_id" id="coach_id">
                        <option value="">pilih</option>
                        @foreach ($coaches as $coach)
                            <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                        @endforeach
                    </select>
                </td>
            <tr>
                <td><label for="description">description</label></td>
                <td><textarea name="description" id="description" rows="3"></textarea></td>
            </tr>
            <tr>
                <td><label for="total_meetings">total pertemuan</label></td>
                <td><input type="number" name="total_meetings" id="total_meetings"></td>
            </tr>
            <tr>
                <td><label for="meeting_duration">durasi pertemuan</label></td>
                <td><input type="number" name="meeting_duration" id="meeting_duration"></td>
            </tr>
            <tr>
                <td><label for="schedule_day">jadwal pertemuan</label></td>
                <td><textarea name="schedule_day" id="schedule_day"></textarea></td>
            </tr>
            <tr>
                <td>
                    <button type="submit">kirim</button>
                </td>
            </tr>
            </tr>
        </table>
    </form>
</body>
</html>
