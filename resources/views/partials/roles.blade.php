<div>
    @foreach ($roles as $role)
        <p>{{ $role->role }}</p>
        <form action="/role/delete/{{ $role->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
        </form>
    @endforeach
</div>
