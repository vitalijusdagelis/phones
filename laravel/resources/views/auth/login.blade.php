{!! Form::open(['url' => 'login']) !!}
El.pašto adresas
<br>
{!! Form::email('email', old('email')) !!}
<br>
Slaptažodis
<br>
{!! Form::password('password') !!}
<br>
<button type="submit">Prisijungti</button>
{!! Form::close() !!}