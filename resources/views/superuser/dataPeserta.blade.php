@extends('../layouts/main')

@section('konten')
<div class="container mt-4">
    <h2>Data Peserta Softskill</h2>
    <a href="/tambahPeserta" class="btn btn-success">Tambah Peserta</a>
    <div class="table-responsive mt-4">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Level</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no =1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nim}}</td>
                    <td>{{$item->namaLengkap}}</td>
                    <td>{{$item->prodi}}</td>
                    <td>{{$item->level}}</td>
                    <td>
                        <a href="/tampilDataPeserta/{{ $item->id }}" class="btn btn-warning me-2">Edit</a>
                        <a href="/deleteDataPeserta/{{ $item->id }}" class="btn btn-danger">Hapus</a>   
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>


@endsection