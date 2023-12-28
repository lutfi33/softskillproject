@extends('../layouts/main')

@section('konten')

    <h1>Edit Data Fasilitator</h1>

    <form action="/updateDataFasil/{{ $data->id }}"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama lengkap:</label>
            <input type="text" id="nama" name="nama" value="{{ $data->nama }}" required>
        </div>
        
        <div class="mb-3">
            <label for="nidn">NIDN :</label>
            <input type="text" id="nidn" name="nidn" value="{{ $data->nidn }}" required>
        </div>
        <div class="mb-3">
            <label for="prodi">Prodi :</label>
            <input type="text" id="prodi" name="prodi" value="{{ $data->prodi }}" required>
        </div>

        
        <div class="mb-3">
        <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>

@endsection