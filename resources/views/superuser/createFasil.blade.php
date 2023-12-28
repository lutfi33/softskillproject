@extends('../layouts/main')

@section('konten')

    <h1>Tambah Fasil</h1>

    <form action="/insertData" class="form-control"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        
        <div class="mb-3">
            <label for="nidn">NIDN :</label>
            <input type="text" class="form-control" id="nidn" name="nidn" required>
        </div>
        <div class="mb-3">
            <label for="prodi">Prodi :</label>
            <input type="text" class="form-control" id="prodi" name="prodi" required>
        </div>

        
        <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>

@endsection