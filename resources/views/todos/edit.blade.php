<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Todo</title>
</head>

<body>
    <h1>Edit Todo</h1>
    <div>
        <a href="{{ route('todos.index') }}">Back to list</a>
    </div>
    <div>
        <form name="editform" action="{{ route('todos.update', ['todo' => $todo->id]) }}" method="post" id="editform">
            @method('PUT')
            @csrf
            <dl>
                <dt>Todo</dt>
                <dd>
                    <input id="todo" name="todo" value="{{ $todo->todo }}" />
                    <span style="color: red;">{{ $errors->first('todo') }}</span>
                </dd>
                <dt>Finish?</dt>
                <dd>
                    <div>
                        <input type="radio" id="done" name="done" value="false"
                        @if (!$todo->done)
                          checked
                        @endif
                        />
                        <label for="done">Yet</label>
                    </div>
                    <div>
                        <input type="radio" id="yet" name="done" value="true"
                        @if ($todo->done)
                          checked
                        @endif
                        />
                        <label for="yet">Done!</label>
                    </div>
                </dd>
            </dl>
            <button type="submit" name="action" value="send">Update</button>
        </form>
        <form method="POST" action="{{ route('todos.destroy', ['todo' => $todo->id]) }}">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
</body>

</html>