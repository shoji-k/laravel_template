<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <div>
        @isset($errors)
            <x-alert :message="$errors->first('message')"/>
        @endisset
        <form name="loginform" action="{{ route('login.authenticate') }}" method="post" id="loginform">
            @csrf
            <dl>
                <dt>メールアドレス:</dt>
                <dd>
                    <input type="email" name="email" />
                    <span style="color: red;">{{ $errors->first('email') }}</span>
                </dd>
            </dl>
            <dl>
                <dt>パスワード:</dt>
                <dd>
                    <input type="password" name="password" />
                    <span style="color: red;">{{ $errors->first('password') }}</span>
                </dd>
            </dl>
            <button type="submit" name="action" value="send">Login</button>
        </form>
    </div>
</body>

</html>