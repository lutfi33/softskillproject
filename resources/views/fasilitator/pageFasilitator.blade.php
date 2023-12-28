@extends('../layouts/LayoutFasil')

@section('konten')
<div class="container-fluid px-4">
                        <h1 class="mt-5">Beranda Fasilitator</h1>
                        
                        <div class="row mt-3">
                            <div class="col-12 p-3 text-center">
                                <img src="img/naikroket.svg" width="30%" alt="welcome img" class="img-fluid">
                                <h3 class="mt-4">Hallo hai... {{ Auth::user()->fullName}}</h3>
                                <div class="hr"></div>
                                <h4 class="mt-5">Selamat datang di Aplikasi SOFTSKILL 2024</h4>

                                <p>Ayo....., Nilai Kegiatan Peserta Softskill🚀</p>
                                <a href="" class="btn btn-primary">Nilai Peserta</a>
                            </div>
                        </div>
                    </div>
@endsection