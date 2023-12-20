@extends('layouts/layoutPeserta')

@section('konten')
<div class="container mt-4">
    <h2>Profilku</h2>
    
    <div class="row">
        <div class="col-md-4">
            <img src="img/profile-icon.png" class="img-fluid w-50 rounded-circle my-5 mx-5" alt="img-main">
        </div>
        <div class="col-md-4 p-3 border radius-mid shadow">
            <p>Username : lutfi</p>
            <p>Nama Lengkap : Lutfi Hermansah</p>
            <p>Nim : 212520043</p>
            <p>Prodi : Teknologi Informasi</p>
            <p>Level : 1</p>
            <p>Password : *************</p>
        </div>
        <div class="col-md-4 border text-center  radius-mid shadow bg-info">
            <h6>Predikat Pelatihan Terkahir</h6>
            <h1>A</h1>
        </div>
    </div>
    <a href="/newFasil" class="btn btn-warning my-5">Edit Profil</a>
</div>


@endsection