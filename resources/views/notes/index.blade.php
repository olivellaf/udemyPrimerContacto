<h1>My notes</h1>
<hr>

<h3>List</h3>
<ul>
    @foreach($notes as $note)
        <li>{{ $note->title }}</li>
    @endforeach
</ul>
