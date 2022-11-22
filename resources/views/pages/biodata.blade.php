@extends('home')

@section('konten')
    <table class="w-full table-auto border">
        <tr class="border-b font-medium bg-gray-200">
            <th class="p-2">
                Nama
            </th>
            <td class="w-4/6">
                {{$nama}}
            </td>
        </tr>
        <tr class="border-b">
            <th class="p-2">
                NIP
            </th>
            <td class="w-4/6">
                {{$nip}}
            </td>
        </tr>
        <tr class="border-b bg-gray-200">
            <th class="p-2">
                NIDN
            </th>
            <td class="w-4/6">
                {{$nidn}}
            </td>
        </tr>
        <tr class="border-b">
            <th class="p-2">
                Fakultas
            </th>
            <td class="w-4/6">
                @if ($prodi == 'S1 Informatika' || $prodi == 'S1 Sistem Informasi' || $prodi == 'S1 Teknik Elektro')
                    Fakultas Informatika dan Teknik Elektro
                @elseif ($prodi == 'S1 Manajemen Rekayasa')
                    Fakultas Teknik Industri
                @elseif ($prodi == 'S1 Teknik Bioproses')
                    Fakultas Bioteknologi
                @elseif ($prodi == 'DIII Teknologi Kompoter' || $prodi == 'DII Teknologi Informasi' || $prodi == 'DIV Teknologi Rekayasa Perangkat Lunak')
                    Fakultas Vokasi
                @endif   
            </td>
        </tr>
        <tr class="border-b bg-gray-200">
            <th class="p-2">
                Program Studi
            </th>
            <td class="w-4/6">
                {{$prodi}}
            </td>
        </tr>
        <tr class="border-b">
            <th class="p-2">
                Jabatan Fungsional
            </th>
            <td class="w-4/6">
                {{$jabatanFungsional}}
            </td>
        </tr>
        <tr class="border-b bg-gray-200">
            <th class="p-2">
                Status Keaktifan
            </th>
            <td class="w-4/6">
                @if ($keaktifan == 'A')
                    Aktif
                @else
                    Keluar
                @endif
            </td>
        </tr>
    </table>
@endsection