<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;

class PelanggaranController extends Controller
{
    public function pelanggaran() {

        $data = Pelanggaran::all();
        return view('datapelanggaran', compact('data'));
    }

    public function inppelanggaran() {
        return view('inputpelanggaran');
    }

    public function insertpelanggaran(Request $request) {
        Pelanggaran::create($request->all());
        return redirect()->route('pelanggaran')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkanpelanggaran($id) {
        
        $data = Pelanggaran::find($id);
        // dd($data);

        return view('editpelanggaran', compact('data'));
    }

    public function updatepelanggaran(Request $request, $id) {
        $data = Pelanggaran::find($id);
        $data->update($request->all());
        return redirect()->route('pelanggaran')->with('success','Data Berhasil Di Ubah'); 
    }

    public function deletepelanggaran($id) {
        $data = Pelanggaran::find($id);
        $data->delete();
        return redirect()->route('pelanggaran')->with('success','Data Berhasil Di Hapus');
    }
}
