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
    
{{--         
    #3F4CD9
    #6E61CA
    #C282FA
    #ECEDEF
 --}}

</head>
<body class="bg-theme-4">
    <div class="px-4 navbar mt-0 text-white bg-theme-1" style="background-color: ">
        <nav class="navbar-brand text-white flex space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M3 18v-2h18v2Zm0-5v-2h18v2Zm0-5V6h18v2Z" fill="#FFFFFF"/></svg>
            <span>Form Rencana Kerja Dosen</span>
        </nav>
        <div class="space-x-2 h-auto flex items-center">
            {{-- <i class="bi bi-bell"></i> --}}
            <div>
                @include('components.notifications')
            </div>
            <span class="p-2">
                {{ $nama }}
            </span>
            <i class="bi bi-person-circle p-2"></i>
        </div>
    </div>

    <main class="flex">
        <div class="sidenav w-2/12 left-0 h-full bg-white rounded-lg" aria-label="Sidenav">
           {{-- @include('components.sidenav') --}}
        </div>

        <div class="main p-2 m-2 rounded-lg bg-white w-full">
            <h2>Rencana Kerja Dosen - Semester Genap 2022/2023</h2>
            <hr class="mt-0">
            <nav class="flex p-0">
                <a href="/biodata" class="bg-theme-4 p-3 hover:bg-theme-1 hover:text-white rounded-l-lg">Biodata</a>
                <a href="/pendidikan" class="bg-theme-4 p-3 hover:bg-theme-1 hover:text-white">Pelaksanaan Pendidikan</a>
                <a href="/penelitian" class="bg-theme-4 p-3 hover:bg-theme-1 hover:text-white">Pelaksanaan Penelitian</a>
                <a href="/pengabdian" class="bg-theme-4 p-3 hover:bg-theme-1 hover:text-white">Pelaksanaan Pengabdian</a>
                <a href="/penunjang" class="bg-theme-4 p-3 hover:bg-theme-1 hover:text-white">Pelaksanaan Penunjang</a>
                <a href="/simpulan" class="bg-theme-4 p-3 hover:bg-theme-1 hover:text-white rounded-r-lg">Simpulan</a>
            </nav>
            <hr>
            
            <div class="mt-3">
                @yield('konten')
            </div>
        </div>
    </main>

    

    <br><br>

    <footer>
        @include('components.footer')
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>