<?php

namespace App\Http\Controllers;

use App\Models\Peserta;

use Illuminate\Http\Request;

class PesertaController extends Controller
{

    function dataPeserta() {
        $data = Peserta::all();
        // dd($data);
        return view('superuser/dataPeserta',compact(['data']));
    }

    function tambahPeserta() {
        return view('superuser/tambahPeserta');
    }
    
    public function prosesPeserta(Request $request)
    {
        // dd($request->all());
        Peserta::create($request->all());
        $data = Peserta::all();
        // return redirect()->route('superuser.dataPeserta')->with('berhasil', 'Data Berhasil Di Simpan');
        return view('superuser.dataPeserta',compact(['data']));
    }

    public function tampilDataPeserta($id){
        $data = Peserta::find($id);
       return view('superuser.editPeserta', compact('data'));
    }

    public function updateDataPeserta(Request $request, $id){
        $data = Peserta::find($id);
        $data->update($request->all());

        return redirect()->route('dataPeserta')->with('berhasil', 'Data Berhasil Di Ubah');
    }

    public function deleteDataPeserta($id){
        $data = Peserta::find($id);
        $data->delete();

        return back()->with('success', 'Post berhasil diperbarui');
    }
}
