<?php

namespace App\Http\Controllers;

use App\Models\Fasil;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{

    public function  tampilFasil(){
        $fasilitators = Fasil::all();
       return view('fasilitator.penilaian', compact('fasilitators'));
    }

    public function index(){
        return view('fasilitator.penilaian');
    }
    
    public function dataPeserta(){
        return view('fasilitator.dataPeserta');
    }
    
    public function insertDataNilai(Request $request)
    {

        // Validasi input jika diperlukan
        $request->validate([
            'nim' => 'required',
            'nama_peserta' => 'required',
            'nama_fasilitator' => 'required',
            'nilai_akhir' => 'required',
            'presensi' => 'required',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // mencari nilai rata - rata / total nilai
        $nilaiPresensi = $request->input('presensi');
        $nilaiAkhir = $request->input('nilai_akhir');

        $rataRata = ($nilaiPresensi + $nilaiAkhir) / 2;

        // Konversi Nilai
        if ($rataRata >= 60 && $rataRata < 70) {
            $konversi = 'C';
        } elseif ($rataRata >= 70 && $rataRata < 85) {
            $konversi = 'B';
        } elseif ($rataRata >= 85 && $rataRata <= 100) {
            $konversi = 'A';
        } else {
            return 'Tidak Valid';
        }


        // Simpan data ke dalam database
        Penilaian::create([
            'nim' => $request->input('nim'),
            'nama_peserta' => $request->input('nama_peserta'),
            'nama_fasilitator' => $request->input('nama_fasilitator'),
            'nilai_akhir' => $request->input('nilai_akhir'),
            'presensi' => $request->input('presensi'),
            'total_nilai' => $rataRata,
            'konversi_nilai' => $konversi
        ]);

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('indexPenilaian');
    }

    // -========================


}
