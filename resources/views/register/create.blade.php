<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <div>
        <form name="registerform" action="{{ route('register.store') }}" method="post" id="registerform">
            @csrf
            <dl>
                <dt>名前:</dt>
                <dd>
                    <input type="text" name="name" />
                    <span style="color: red;">{{ $errors->first('name') }}</span>
                </dd>
            </dl>
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
            <dl>
                <dt>パスワード(確認):</dt>
                <dd>
                    <input type="password" name="password_confirmation" />
                    <span style="color: red;">{{ $errors->first('password_confirmation') }}</span>
                </dd>
            </dl>
            <button type="submit" name="action" value="send">Register</button>
        </form>
    </div>
</body>

</html>