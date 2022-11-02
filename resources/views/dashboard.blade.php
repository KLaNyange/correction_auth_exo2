<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($admins as $admin)
                    {{-- @if ($admin->role->role == 'admin') --}}
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1>{{ $admin->name }}</h1>
                        <h1>{{ $admin->email }}</h1>
                        {{-- <h1>{{ $admin->firstname }}</h1> --}}
                        <h1>{{ $admin->role->role }}</h1>
                        <a href="">SHOW MORE</a>
                        @if (Auth::user()->id != $admin->id)
                        <form action="/user/delete/{{ $admin->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                        @endif
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
