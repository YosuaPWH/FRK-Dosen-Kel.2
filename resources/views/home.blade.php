<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="container-md border" style="background-color: #eef2f5">
    <div class="navbar">
        <nav class="navbar-brand">
            <span>Form Rencana Kerja Dosen</span>
        </nav>
        <div class="">
            <i class="bi bi-bell"></i>
            <span class="mx-2">
                {{ $nama }}
            </span>
            <i class="bi bi-person-circle"></i>
        </div>
    </div>

    <h1>Ini adalah Homepage Kelompok 2</h1>
    <nav style="display: inline">
        <ol style="list-style-type: none; display: inline;">
            <li class="mx-5"><a href="/login/auth">Biodata</a></li>
            <li class="mx-5"><a href="/pendidikan">Pelaksanaan Pendidikan</a></li>
            <li class="mx-5"><a href="/penelitian">Pelaksanaan Penelitian</a></li>
        </ol>
    </nav>
    {{-- <h3>Email anda adalah : {{$nama}}</h3> --}}
    
    <div style="background-color: #f7f8fa">

        @yield('konten')
    </div>

    <br><br>

    <footer>
        <h1>Ini adalah Footer</h1>
    </footer>
</body>
</html>