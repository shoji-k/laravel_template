<x-layout>
    <x-slot name="title">Create Todo</x-slot>

    <h1>Create Todo</h1>
    <div>
        <a href="{{ route('todos.index') }}">Back to list</a>
    </div>
    <div>
        <form name="createform" action="{{ route('todos.store') }}" method="post" id="createform">
            @csrf
            <dl>
                <dt>Todo</dt>
                <dd>
                    <input id="todo" name="todo" class="@error('todo') is-invalid @enderror" />
                    @error('todo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </dd>
            </dl>
            <button type="submit" name="action" value="send">Create</button>
        </form>
    </div>
</x-layout>