<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    {{-- <button class="btn btn-primary">dawdaw</button> --}}
    <div style="margin: 0px auto; width: 40%; margin-top: 50px; border: 1px solid">
        <form action="/login/auth" style="width: fit-content" method="POST">
            @csrf
            <h3>Login Bos</h3>
            <div class="mb-3">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username-login">
            </div>
            <div class="mb-3">
                <label for="inputPassword">Password</label>
                <input type="password" name="password-login" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>