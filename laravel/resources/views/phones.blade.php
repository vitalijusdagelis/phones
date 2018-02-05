<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telefonų taisykla</title>
</head>
<body>
<div class="content">
    <a href="{{ url('login') }}">Prisijungti</a></li>
    <a href="{{ url('register') }}">Registruotis</a></li>

    <table>
        <tr>
            <th>Telefonas</th>
            <th>Komentaras</th>
        </tr>
        @foreach ($phones as $phone)
        <tr>
            <td>{{ $phone->title }}</td>
            <td>{{ $phone->comment }}</td>
            <td>
                <a href="{{ url('phones/' . $phone->id . '/edit') }}">Redaguoti</a>
            </td>
            <td>
                <form style="display:inline" action="{{ url('phones/' . $phone->id) }}"
                      method="post" onsubmit="return confirm('Ar tikrai?')">
                    <input type="hidden" name="_method" value="DELETE" />
                    {{ csrf_field() }}
                    <input type="submit" value="Trinti" />
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td>{{ $phones->links() }}</td>
        </tr>
        @if (count($phones) == 0)
        <tr>
            <td colspan="3">Nieko nerasta</td>
        </tr>
        @endif
    </table>

    @if (Auth::check())
    <h2>Naujas telefonas</h2>
        <form action="{{ url('phones') }}" method="post">
            {{ csrf_field() }}
            Pavadinimas:
            <br>
            <input type="text" name="title" />
            <br>
            Komentaras (daugiausia 160 simbolių)
            <br>
            <textarea name="comment" maxlength="160"></textarea>
            <br>
            <input type="submit" value="Saugoti" />
        </form>
    @endif
</div>
</body>
</html>
