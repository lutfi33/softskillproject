<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LandingPeserta extends Controller
{
    function nilaiPeserta() {
        return view('peserta.nilaiPeserta');
    }
    public function profilPeserta(){
        return view('peserta.dataPeserta');
    }

    function pageAdmin() {
        return view('peserta.pagePeserta');
    }
}
