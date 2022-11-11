<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login(Request $request){

        $username = $request->input('username-login');
        $password = $request->input('password-login');


        $response = Http::asForm()->post('https://cis-dev.del.ac.id/api/jwt-api/do-auth', [
            'username' => $username,
            'password' => $password
        ])->body();

        $json = json_decode($response, true);

        if ($json['result'] == true) {
            $token = $json['token'];

            return $this->getDataDosen($json['user']['user_id'], $token);
        } else {
            return "<h1>Username dan passwordmu salah, coba bikin lagi</h1>";
        }
    }

    function getDataDosen($userId, $token) {
        $responseDataDosen = Http::withToken($token)->asForm()->post('https://cis-dev.del.ac.id/api/library-api/dosen?userid='.$userId)->body();
        $jsonDataDosen = json_decode($responseDataDosen, true);
        
        $nama = $jsonDataDosen['data']['dosen'][0]['nama'];
        $prodi = $jsonDataDosen['data']['dosen'][0]['prodi'];
        $email = $jsonDataDosen['data']['dosen'][0]['email'];
        $nidn = $jsonDataDosen['data']['dosen'][0]['nidn'];
        $nip = $jsonDataDosen['data']['dosen'][0]['nip'];   

        return view('biodata', [
            'nama' => $nama, 
            'prodi' => $prodi, 
            'email' => $email, 
            'nidn' => $nidn, 
            'nip' => $nip
        ]);
    }

    function pendidikan() {
        return view('pendidikan');
    }
}
