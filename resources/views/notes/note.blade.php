<h1>ID: {{ $note->id ." | " . $note->title }}</h1>
<hr>
<h4>Description: </h4>
<p>{{ $note->description }}</p>

<a href="{{ url('/notes') }}">< Back to notes</a>
