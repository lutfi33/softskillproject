@extends('../layouts/layoutPeserta')

@section('konten')
<div class="container mt-4">
    <h2>Profilku</h2>
    
    <div class="row">
        <div class="col-md-4">
            <img src="img/profile-icon.png" class="img-fluid w-50 rounded-circle my-5 mx-5" alt="img-main">
        </div>

        <div class="col-md-4 p-3 border radius-mid shadow">
            <p>Username : {{ Auth::user()->username}}</p>
            <p>Nama Lengkap : {{ Auth::user()->fullName}}</p>
            <p>Nim : {{ Auth::user()->idpengguna}}</p>
                <p>Prodi : {{ $dataPeserta->prodi }}</p>
                <p>Level : {{ $dataPeserta->level }}</p>
        </div>
        <div class="col-md-4 border text-center radius-mid shadow bg-info">
            <h6 class=" mt-5">Predikat Pelatihan Terkahir</h6>
            @foreach($nim as $participant)
                <h1>{{ $participant->konversi_nilai }}</h1>
            @endforeach
            
        </div>

    </div>
    <a href="/newFasil" class="btn btn-warning my-5">Edit Profil</a>
</div>


@endsection