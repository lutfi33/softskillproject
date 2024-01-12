@extends('../layouts/main')

@section('konten')
<div class="container mt-4">
    <h2>Data Peserta Softskill</h2>

    <div class="row my-3">
        <div class="col-md-8">
            <a href="/tambahPeserta" class="btn btn-success">Tambah Peserta</a>
        </div>
        <div class="col-md-4">
            <form action="{{ route('filter.by.level') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-2 m-auto"><label for="level">Filter</label></div>
                    <div class="col-5">
                        <select class="form-control" id="level" name="level">
                        <option value="1">Level 1</option>
                        <option value="2">Level 2</option>
                        <option value="3">Level 3</option>
                        </select>
                    </div>
                    <div class="col-5 m-auto">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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