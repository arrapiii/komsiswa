<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;


class SiswaController extends Controller
{
    public function siswa() {
        $data = Siswa::with(['guru'])->get();
        return view('datasiswa', compact('data'));
    }

    public function inpsiswa() {
        $wal = Guru::all();
        return view('inputsiswa', compact('wal'));
    }

    public function insertsiswa(Request $request) {
        Siswa::create([
            'siswa'=>$request->siswa,
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan,
            'nis'=>$request->nis,
            'jeniskelamin'=>$request->jeniskelamin,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'email'=>$request->email,
            'password'=>$request->password,
            'guru_id'=>$request->guru_id
        ]);
        return redirect()->route('siswa')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkansiswa($id) {
        $wal = Guru::all();
        $data = Siswa::with('guru')->find($id);
        // dd($data);

        return view('editsiswa', compact('data', 'wal'));

    }
    public function detailsiswa($id) {
        
        $data = Siswa::find($id);
        // dd($data);

        return view('detailsiswa', compact('data'));
    }

    public function updatesiswa(Request $request, $id) {
        $data = Siswa::with('relationsToPelanggaran', 'guru')->find($id);
        $data->update([
            'id'=>$request->id,
            'siswa'=>$request->siswa,
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan,
            'nis'=>$request->nis,
            'jeniskelamin'=>$request->jeniskelamin,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('siswa')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deletesiswa($id) {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success','Data Berhasil Di Hapus');
    }
}
