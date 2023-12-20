<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingFasil extends Controller
{
    function pageAdmin() {
        return view('pageFasilitator');
    }
}
