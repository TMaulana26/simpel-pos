<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register/Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <h1>Simpel Pos</h1>
    </div>
    @guest
        <div >
            <!-- Register Form -->
            <div >
                <div >Register</div>
                <form action="/register" method="POST" >
                    @csrf
                    <input name="name" type="text" placeholder="Name"  required>
                    <input name="email" type="email" placeholder="E-Mail"  required>
                    <input name="password" type="password" placeholder="Password"  required>
                    <button type="submit" >Register</button>
                </form>
            </div>
            <!-- Login Form -->
            <div class="">
                <div class="">Log In</div>
                <form action="/login" method="POST" >
                    @csrf
                    <input name="loginname" type="text" placeholder="Name"  required>
                    <input name="loginpassword" type="password" placeholder="Password"  required>
                    <button type="submit" class="">Log In</button>
                </form>
            </div>
        </div>
    @endguest
</body>
</html>
