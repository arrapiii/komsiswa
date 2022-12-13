<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\SiswaPelanggaran;

class SisPel extends Controller
{
    public function getSiswa(){
        $datasiswa = Siswa::all();

        return view('transaksi', ['datasiswa' => $datasiswa]);
    }

    public function inputpelanggar(){
        $data = Siswa::all();
        $dataa = Pelanggaran::all();
        return view('inputpelanggar', compact('data', 'dataa'));
    }

    public function insertpelanggar(Request $request) {
        $data = SiswaPelanggaran::create([
            'siswa_id'=>"$request->siswa_id",
            'pelanggaran_id'=>$request->pelanggaran_id
        ]);
        return redirect("transaksii")->with('success','Data Berhasil Di Tambahkan');
    }

    public function deletepelanggar($id) {
        $data = Siswa::find($id);
        $data->delete();
        return redirect("transaksii")->with('success','Data Berhasil Di Hapus');
    }

    public function tampilpelanggar(){
        $datasiswa = Siswa::with('relationsToSiswa', 'relationsToPelanggaran');

        return view('detailpelanggar', compact('datasiswa'));
    }
}
