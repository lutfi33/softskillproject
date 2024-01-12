<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPeserta extends Controller
{
    function nilaiPeserta() {
        return view('peserta.nilaiPeserta');
    }
    public function profilPeserta(){
        $nilai = Auth::user()->idpengguna;
        $nim = Penilaian::where('nim', $nilai)->get();
        $dataPeserta = User::join('pesertas', 'pesertas.nim', '=', 'users.idpengguna')
                        ->where('users.idpengguna', $nilai)
                        ->first();
        return view('peserta.dataPeserta', compact('nim', 'dataPeserta'));
    }

    function pageAdmin() {
        return view('peserta.pagePeserta');
    }

}
