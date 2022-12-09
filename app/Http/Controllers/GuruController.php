<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function guru() {

        $data = Guru::all();
        return view('dataguru', compact('data'));
    }

    public function inpguru() {
        return view('inputguru');
    }

    public function insertguru(Request $request) {
        Guru::create($request->all());
        return redirect()->route('guru')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkanguru($id) {
        
        $data = Guru::find($id);
        // dd($data);

        return view('editguru', compact('data'));
    }

    public function updateguru(Request $request, $id) {
        $data = Guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deleteguru($id) {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru')->with('success','Data Berhasil Di Hapus');
    }
}
