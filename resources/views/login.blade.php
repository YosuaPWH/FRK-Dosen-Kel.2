<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/js/app.js'])
</head>

<body style="background-color: #00bfff">
    <div style="margin: 0 auto; width: 40%; height: 80vh; margin-top: 5%"
        class="d-flex justify-content-center align-items-center bg-light rounded-3 p-5 shadow">
        <div class="w-75" >
            <div class="text-center">
                <img src="{{ asset('storage/logodel.jpg') }}" alt="Logo Del" width="20%">
                <h3>Selamat datang di SISTER</h3>
                <p>Sistem Informasi Sumberdaya Terintegrasi</p>
            </div>
            <form action="/login/auth" style="margin: 0 auto" method="POST">
                @csrf
                <h3>Login</h3>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username-login"
                        placeholder="Silahkan masukkan username anda">
                </div>
                <div class="mb-3">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password-login" id="" class="form-control" placeholder="Silahkan masukkan password anda">
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</body>

</html>