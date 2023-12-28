@extends('../layouts/main')

@section('konten')
<div class="container mt-4">
    <h2>Data Pengguna</h2>
    <a href="/newPengguna" class="btn btn-success my-2">Tambah Pengguna</a>
    <div class="table-responsive mt-4">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Role</th>
                    <th scope="col">Nim/NIDN/ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no =1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->role}}</td>
                    <td>{{$item->idpengguna}}</td>
                    <td>{{$item->fullName}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->password}}</td>
                    <td>
                        <a href="/deleteDataPengguna/{{ $item->id }}" class="btn btn-warning">Edit</a>   
                        <a href="/deleteDataPengguna/{{ $item->id }}" class="btn btn-danger">Hapus</a>   
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>


@endsection