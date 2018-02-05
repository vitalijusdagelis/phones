{!! Form::open(['url' => 'register']) !!}
Vardas
<br>
{!! Form::text('name', old('name')) !!}
<br>
El.pašto adresas
<br>
{!! Form::email('email', old('email')) !!}
<br>
Slaptažodis
<br>
{!! Form::password('password') !!}
<br>
Pakartokite slaptažodį
<br>
{!! Form::password('password_confirmation') !!}
<br>
<button type="submit">Registruotis</button>
{!! Form::close() !!}