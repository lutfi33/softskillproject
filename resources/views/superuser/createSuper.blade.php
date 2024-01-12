@extends('../layouts/main')

@section('konten')

    <h1>Tambah SuperUser</h1>

    <form action="/insertDataSuper" class="form-control"  method="POST">
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
            <label for="prodi">Password :</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>

@endsection