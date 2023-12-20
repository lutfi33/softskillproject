<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPeserta extends Controller
{
    function nilaiPeserta() {
        return view('nilaiPeserta');
    }
    function profilPeserta() {
        return view('dataPeserta');
    }

    function pageAdmin() {
        return view('pagePeserta');
    }
}
