<div>
    <!-- <h1>Note: {{ $note->created_at}}</h1> -->

    <a href="{{route ('note.edit', $note)}}">edit</a>
    <button>delete</button>
</div>
<div>{{$note->note}}</div>
