<h1>My notes</h1>
<hr>

@if(session('status'))
    {{ session('status') }}
@endif

<h3>List</h3>
<ul>
    @foreach($notes as $note)
        <li>
            <ul>
                <li>{{ $note->title }}</li>
                <li><a href="{{ url('/notes/note/' . $note->id) }}">See note</a></li>
                <li><a href="{{ url('/notes/delete-note/' . $note->id ) }}">x Remove</a></li>
            </ul>
        </li>
    @endforeach
</ul>
