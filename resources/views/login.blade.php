<!DOCTYPE HTML>
<html>
<head></head>
<body>
    <p>Login Page</p>
    <br>
    <form method='post' action="{{ route('mypage.login') }}">
        @csrf
        <div>
            <input type="text" name='mail_address' placeholder='e-mail address'>
            <input type="text" name='password' placeholder='password'>

            <button>Login</button>
        </div>
    </form>
</body>
</html>