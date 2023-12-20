<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fasil;
use App\Models\User;

class AdminProses extends Controller
{
    function pageAdmin() {
        return view('landing');
    }
    function pengguna() {
        $data = User::all();
        return view('dataPengguna',compact(['data']));
    }
    function index() {
        $fasil = Fasil::all();
        return view('data_fasil',compact(['fasil']));
    }

    function tambahFasil() {
        return view('createFasil');
    }
    
    public function insertData(Request $request)
    {
        // dd($request->all());
        Fasil::create($request->all());
        return redirect()->route('dataFasil');
    }

    public function tampilDataFasil($id){
        $data = Fasil::find($id);
       return view('editFasil', compact('data'));
    }

    public function updateDataFasil(Request $request, $id){
        $data = Fasil::find($id);
        $data->update($request->all());

        return redirect()->route('dataFasil')->with('berhasil', 'Data Berhasil Di Ubah');
    }

    public function deleteDataFasil($id){
        $data = Fasil::find($id);
        $data->delete();

        return redirect()->route('dataFasil')->with('berhasil', 'Data Berhasil Di Hapus');
    }
}
