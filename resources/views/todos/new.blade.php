<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Todo</title>
</head>

<body>
    <h1>Create Todo</h1>
    <div>
        <a href="/todos">Back to list</a>
    </div>
    <div>
        <form name="createform" action="/todos" method="post" id="createform">
            @csrf
            <dl>
                <dt>Todo</dt>
                <dd>
                    <input id="todo" name="todo" />
                    <span style="color: red;">{{ $errors->first('todo') }}</span>
                </dd>
            </dl>
            <button type="submit" name="action" value="send">Create</button>
        </form>
    </div>
</body>

</html>