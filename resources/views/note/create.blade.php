<div>
    <form action="{{route ('note.store')}}" method="Post" class="note">
    @csrf
     <textarea name="note" rows="10" class="note-body" placeholder="enter your note"></textarea>
     <div class="note-buttons">
        <a href="{{route('note.index')}}">cancel</a>
        <button>submit</button>

     </div>

    </form>
</div>
