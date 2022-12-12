<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SisPel extends Controller
{
    public function getSiswa(){
        $datasiswa = Siswa::all();

        return view('transaksi', ['datasiswa' => $datasiswa]);
    }
}
