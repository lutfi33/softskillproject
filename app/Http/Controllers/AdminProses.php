<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fasil;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminProses extends Controller
{
    // Pengguna
    public function deleteDataPengguna($id){
        $data = User::find($id);
        $data->delete();

        return redirect()->route('dataPengguna')->with('berhasil', 'Data Berhasil Di Hapus');
    }

    public function prosesPengguna(Request $request)
    {
       // Simpan data ke dalam database
       $rolePeserta = "peserta";
       User::create([
        'fullName' => $request->input('fullName'),
        'idpengguna' => $request->input('idpengguna'),
        'username' => $request->input('username'),
        'password' =>  Hash::make($request->input('password')),
        'role' => $rolePeserta
    ]);

    // Redirect atau berikan respons sesuai kebutuhan
    return redirect()->route('dataPengguna');
    }

    function tambahPengguna() {
        return view('superuser.newPengguna');
    }

    function pageAdmin() {
        return view('superuser.landing');
    }
    function pengguna() {
        $data = User::all();
        return view('superuser.dataPengguna',compact(['data']));
    }


    // Fasil
    function index() {
        $fasil = Fasil::all();
        return view('superuser.data_fasil',compact(['fasil']));
    }

    function tambahFasil() {
        return view('superuser.createFasil');
    }
    
    public function insertData(Request $request)
    {
        // dd($request->all());
        $role = "fasilitator";
        User::create([
            'fullName' => $request->input('nama'),
            'idpengguna' => $request->input('nidn'),
            'username' => $request->input('nidn'),
            'password' =>  Hash::make($request->input('nidn')),
            'role' => $role
        ]);

        Fasil::create($request->all());
        return redirect()->route('dataFasil');
    }

    public function tampilDataFasil($id){
        $data = Fasil::find($id);
       return view('superuser.editFasil', compact('data'));
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



    // insert data superuser

    public function newSuperuser(){
        return view('superuser.createSuper');
    }
    public function insertDataSuper(Request $request)
    {
        // dd($request->all());
        $role = "superuser";
        User::create([
            'fullName' => $request->input('nama'),
            'idpengguna' => $request->input('nidn'),
            'username' => $request->input('nidn'),
            'password' =>  Hash::make($request->input('password')),
            'role' => $role
        ]);
        return redirect()->route('dataPengguna');
    }


    // FILTER PESERTA
    public function filterByLevel(Request $request){
        $level = $request->input('level');

        // Query data berdasarkan level
        $data = Peserta::where('level', $level)->get();

        // Kembalikan data atau tampilkan view yang sesuai
        return view('superuser.dataPeserta', compact('data'));

    }
}
