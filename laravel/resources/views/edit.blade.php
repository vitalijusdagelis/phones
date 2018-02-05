<h2>Telefono redagavimas</h2>

<form action="{{ url('phones/' . $phone->id) }}" method="post">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}
    Pavadinimas:
    <br>
    <input type="text" name="title" value="{{ $phone->title }}" />
    <br>
    <textarea name="comment" maxlength="160">{{ $phone->comment }}</textarea>
    <br>
    <input type="submit" value=" Saugoti " />
</form>