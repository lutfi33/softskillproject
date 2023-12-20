@extends('layouts/main')

@section('konten')

    <h1>Tambah Fasil</h1>

    <form action="/insertData"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama">Nama lengkap:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        
        <div class="mb-3">
            <label for="nidn">NIDN :</label>
            <input type="text" id="nidn" name="nidn" required>
        </div>
        <div class="mb-3">
            <label for="prodi">Prodi :</label>
            <input type="text" id="prodi" name="prodi" required>
        </div>

        
        <div class="mb-3">
        <input type="submit" value="Simpan">
        </div>
    </form>

@endsection