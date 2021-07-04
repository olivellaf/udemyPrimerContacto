<h2>Fruits List:</h2>

<!-- Totalmente distinto -->
<p><a href="{{ route('oranges2') }}">Go to oranges</a></p>
<!-- <p><a href="{{ action('App\Http\Controllers\FruitsController@getOranges') }}">Go to oranges</a></p> -->
<p><a href="{{ action('App\Http\Controllers\FruitsController@anyPears') }}">Go to pears</a></p>

<ul>
    @foreach( $fruits as $fruit )
        <li>{{  $fruit }}</li>
    @endforeach
</ul>

<h1>Laravel form: practicing</h1>
<form action="{{ url('getform') }}" method="post">
    <p>
        <label for="fruit_name">Fruit's name</label>
        <input type="text" name="fruit_name" />
    </p>

    <p>
        <label for="fruit_desc">Fruit's description</label>
        <textarea name="fruit_desc"></textarea>
    </p>

    <input type="submit" value="Send">
</form>
