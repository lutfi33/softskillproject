@extends('../layouts/main')

@section('konten')
<div class="container mt-4">
    <h2>Data Administrator</h2>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <a href="/newFasil" class="btn btn-success my-2">Tambah Fasil</a>
            <a href="/newSuperuser" class="btn btn-primary my-2">Tambah Superuser</a>
        </div>
        
    </div>
    <div class="table-responsive mt-4">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no =1;
                @endphp
                @foreach ($fasil as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->nidn}}</td>
                    <td>{{$item->prodi}}</td>
                    <td>
                        <a href="/tampilDataFasil/{{ $item->id }}" class="btn btn-warning me-2">Edit</a>
                        <a href="/deleteDataFasil/{{ $item->id }}" class="btn btn-danger">Hapus</a>   
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>


@endsection