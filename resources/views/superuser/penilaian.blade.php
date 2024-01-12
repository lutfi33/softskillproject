@extends('../layouts/main')

@section('konten')
    <div class="container mt-5">
        <h2> Nilai Peserta</h2>
        <a href="/superNilai" class="btn btn-primary">Lihat Data Nilai</a>
        <form method="POST" action="/insertDataNilaiSuper">
            @csrf
            
            <div class="form-group mb-3">
                <label for="nama_peserta">Nama Peserta:</label>
                <select class="form-control" id="nama_peserta" name="nama_peserta" required>
                    <option value="">Pilih</option>
                    @foreach(\App\Models\Peserta::all() as $participant)
                        <option value="{{ $participant->id }}" data-nim="{{ $participant->nim }}">{{ $participant->namaLengkap }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control disable" id="nim" name="nim" value="" required>
            </div>

            <div class="form-group mb-3">
                <label for="nama_fasilitator">Nama Fasilitator:</label>
                <select class="form-control" id="nama_fasilitator" name="nama_fasilitator" required>
                    <option value="">Pilih</option>
                    @foreach(\App\Models\Fasil::all() as $participant)
                        <option value="{{ $participant->id }}">{{ $participant->nama }}</option>
                    @endforeach
                </select>
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
        
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                // Handle change event of the select input
                $('#nama_peserta').change(function() {
                    // Get the selected option
                    var selectedOption = $(this).find(':selected');
                    
                    // Set the value of the 'nim' input field to the 'data-nim' attribute of the selected option
                    $('#nim').val(selectedOption.data('nim'));
                });
            });
        </script>

        
    </div>
@endsection