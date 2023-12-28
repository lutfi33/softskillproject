@extends('../layouts/LayoutFasil')

@section('konten')
    <div class="container mt-5">
        <h2> Nilai Peserta</h2>
        <form method="POST" action="/prosesNilai">
            @csrf
            
            

            <div class="form-group mb-3">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" value="" required>
            </div>

            <div class="form-group mb-3">
                <label for="nama_peserta">Nama Peserta:</label>
                <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" value="" required>
            </div>

            <div class="form-group">
                <label for="nama_fasilitator">Nama Fasilitator:</label>
                <input type="text" class="form-control" id="nama_fasilitator" name="nama_fasilitator">
            </div>

            <div class="form-group mb-3">
                <label for="nilai_akhir">Nilai Akhir:</label>
                <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" value="" required>
            </div>

            <div class="form-group mb-3">
                <label for="presensi">Presensi:</label>
                <input type="text" class="form-control" id="presensi" name="presensi" value="" required>
            </div>

            <div class="form-group mb-3">
                <label for="total_nilai">Total Nilai:</label>
                <input type="number" class="form-control bg-warning" id="total_nilai" name="total_nilai" value="" readonly>
            </div>

            <div class="form-group mb-3">
                <label for="konversi_nilai">Konversi Nilai:</label>
                <input type="text" class="form-control bg-info" id="konversi_nilai" name="konversi_nilai" value="" readonly>
            </div>


            <button type="submit" class="btn my-3 btn-primary text-center">Nilai</button>
        </form> 

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
    </div>
@endsection