<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Complete</title>
</head>

<body>
    <h1>Registration Complete</h1>
    <div>
        {{ isset($user) ? $user->name : '' }}さんを登録しました
    </div>
</body>

</html>