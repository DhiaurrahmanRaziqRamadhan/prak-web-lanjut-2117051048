<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile(): string
    {
        $data = [
            'nama'=>'Dhiaurrahman Raziq Ramadhan',
            'npm'=>'2117051048',
            'kelas'=>'C'
        ];
        return view('profile',$data);
    }

    public function profile_url($nama="", $npm="", $kelas=""): string
    {
        $data = [
            'nama'=>$nama,
            'npm'=>$npm,
            'kelas'=>$kelas
        ];
        return view('profile_url',$data);
    }
}
