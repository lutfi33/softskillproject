@extends('../layouts/main')

@section('konten')

 <ul class="d-flex list-unstyled justify-content-between my-4 ">
    <li><a href="/dataPengguna" class="btn btn-primary mt-2"><i class="fas fa-arrow-left"></i></a></li>
    <li><h3>Tambah Pengguna</h3></li>
 </ul>
 
    

    <form action="/prosesInsert"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="fullName">Nama Lengkap :</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>

        <div class="mb-3">
            <label for="idpengguna">NIM/NIDN :</label>
            <input type="text" class="form-control" id="idpengguna" name="idpengguna" required>
        </div>

        <div class="mb-3">
            <label for="username">Username :</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        
        <div class="mb-3">
            <label for="password">Password :</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <div class="mb-3">
            <label for="loginType" class="form-label">Login As:</label>
                <select class="form-control" id="loginType" name="role" required>
                    <option value="peserta">Peserta</option>
                    <option value="fasilitator">Fasilitator</option>
                </select>
        </div>

        
        <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>

@endsection