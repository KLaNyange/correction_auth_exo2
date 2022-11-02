<div>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->role->role }}</p>
        <form action="/user/delete/{{ $user->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">DELETE</button>
        </form>
        <a href="/user/edit/{{ $user->id }}">EDIT</a>
    @endforeach
</div>
