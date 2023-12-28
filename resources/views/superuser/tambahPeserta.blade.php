@extends('../layouts/main')

@section('konten')

    <h1>Tambah Peserta</h1>

    <form action="/prosesPeserta"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama lengkap:</label>
            <input type="text" class="form-control" id="nama" name="namaLengkap" required>
        </div>
        
        <div class="mb-3">
            <label for="nim">NIM :</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
            <label for="prodi">Prodi :</label>
            <input type="text" class="form-control" id="prodi" name="prodi" required>
        </div>
        <div class="mb-3">
            <label for="level">Level :</label>
            <select class="form-select" name='level' id="level" required>
                <option value='1'>Level 1</option>
                <option value='2'>Level 2</option>
                <option value='3'>Level 3</option>
                <option value='4'>Level 4</option>
                <option value='5'>Level 5</option>
              </select>
        </div>

        
        <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>

@endsection