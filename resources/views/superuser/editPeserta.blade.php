@extends('../layouts/main')

@section('konten')

    <h1>Edit Peserta</h1>

    <form action="/updateDataPeserta/{{ $data->id }}"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama lengkap:</label>
            <input type="text" id="nama" class="form-control" name="namaLengkap" value="{{ $data->namaLengkap}}" required>
        </div>
        
        <div class="mb-3">
            <label for="nim">NIM :</label>
            <input type="text" id="nim" class="form-control" name="nim" value="{{ $data->nim }}" required>
        </div>
        <div class="mb-3">
            <label for="prodi">Prodi :</label>
            <input type="text" id="prodi" class="form-control" name="prodi" value="{{ $data->prodi }}" required>
        </div>
        <div class="mb-3">
            <label for="level">Level :</label>
            <select name='level' class="form-select" id="level" required>
                <option value='{{ $data->level}}'>Level 1</option>
                <option value='2'>Level 2</option>
                <option value='3'>Level 3</option>
                <option value='4'>Level 4</option>
                <option value='5'>Level 5</option>
              </select>
        </div>

        
        <div class="mb-3">
        <input type="submit" class="btn btn-success" value="Simpan">
        </div>
    </form>

@endsection