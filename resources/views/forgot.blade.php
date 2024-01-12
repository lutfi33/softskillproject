<!-- Section: Design Block -->

@include('layouts.head');
<section class="text-center text-lg-start">
    <style>
    .cascading-right {
        margin-right: -50px;
    }

    @media (max-width: 991.98px) {
        .cascading-right {
        margin-right: 0;
        }
    }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
    <div class="row g-0 align-items-center">
        <div class="col-lg-4"></div>
        
        <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-5">Ubah Password</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



<form  method="POST">
    @csrf
    <div class="mb-3">
        <label for="namalengkap">Nama Lengkap :</label>
        <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
    </div>
    <div class="mb-3">
        <label for="nim">NIM :</label>
        <input type="text" class="form-control" id="nim" name="nim" required>
    </div>
    <div class="mb-3">
        <label for="username">Username :</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="prodi">Prodi :</label>
        <input type="text" class="form-control" id="prodi" name="prodi" required>
    </div>
    <div class="mb-3">
        <label for="loginType" class="form-label">Login As:</label>
            <select class="form-control" id="loginType" name="role" required>
                <option value="peserta">Peserta</option>
            </select>
    </div>
    <div class="mb-3">
        <label for="password">Password Baru :</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    
    <div class="mb-3">
    <input type="submit" class="btn btn-primary" value="Ajukan">
    </div>
</form>

