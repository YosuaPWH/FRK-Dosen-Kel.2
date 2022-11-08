<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <h1>Ini adalah Homepage Kelompok 2</h1>
    {{-- <h3>Email anda adalah : {{$nama}}</h3> --}}
    <table>
        <tr>
            <td>Nama:</td>
            <td>{{$nama}}</td>
        </tr>
        <tr>
            <td>Prodi:</td>
            <td>{{$prodi}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <td>NIDN:</td>
            <td>{{$nidn}}</td>
        </tr>
        <tr>
            <td>NIP:</td>
            <td>{{$nip}}</td>
        </tr>
    </table>
</body>
</html>