<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use Illuminate\Http\Request;

class LandingFasil extends Controller
{
    function pageAdmin() {
        return view('fasilitator.pageFasilitator');
    }

    public function deleteDataNilai($id){
        $data = Penilaian::find($id);
        $data->delete();

        return redirect()->route('indexPenilaian')->with('berhasil', 'Data Berhasil Di Hapus');
    }

    public function  tampilNilai(){
        $nilaiList = Penilaian::join('pesertas', 'pesertas.id', '=', 'penilaians.nama_peserta')
                                ->join('fasil', 'fasil.id', '=', 'penilaians.nama_fasilitator')
                                ->orderBy('penilaians.created_at', 'desc')
                                ->get();
       return view('fasilitator.dataPeserta', compact('nilaiList'));
    }

}
