<x-layout>
    <x-slot name="title">Todo list</x-slot>
    <h1>Todo list</h1>
    <div>
        <a href="{{ route('todos.create') }}">Create</a>
    </div>
    <ul>
        @foreach ($todos as $todo)
        <li>
            <a href="{{ route('todos.edit', ['todo' => $todo->id]) }}">
                {{ $todo->todo }}
            </a>
            {{ $todo->done ? '✔️' : '' }}
        </li>
        @endforeach
    </ul>
</x-layout>