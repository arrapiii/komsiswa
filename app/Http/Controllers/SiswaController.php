<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function siswa() {

        $data = Siswa::all();
        return view('datasiswa', compact('data'));
    }

    public function inpsiswa() {
        return view('inputsiswa');
    }

    public function insertsiswa(Request $request) {
        Siswa::create($request->all());
        return redirect()->route('siswa')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkansiswa($id) {
        
        $data = Siswa::find($id);
        // dd($data);

        return view('editsiswa', compact('data'));

    }
    public function detailsiswa($id) {
        
        $data = Siswa::find($id);
        // dd($data);

        return view('detailsiswa', compact('data'));
    }

    public function updatesiswa(Request $request, $id) {
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect()->route('siswa')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deletesiswa($id) {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success','Data Berhasil Di Hapus');
    }
}
