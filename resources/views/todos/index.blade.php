<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todos</title>
</head>

<body>
    <h1>Todo list</h1>
    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
</body>

</html>