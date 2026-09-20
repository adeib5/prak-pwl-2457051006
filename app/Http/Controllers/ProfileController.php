<?php

namespace App\Http\Controllers;


class ProfileController extends Controller
{
     public function profile($nama = "", $kelas = "", $npm = "")
    
    {
        $data = [
            'nama' => 'm.adeib syahputra',
            'kelas' => 'A',
            'npm' => '2457051006'
        ];

        return view('profile', $data);
    }
}