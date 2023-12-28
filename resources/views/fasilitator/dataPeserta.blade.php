@extends('../layouts/layoutFasil')

@section('konten')
<div class="container mt-4">
    <h2>Data Penilaian</h2>
    

    <div class="row my-3">
        <div class="col-md-8">
            <a href="/penilaian" class="btn btn-success my-2">Nilai Peserta</a>
        </div>
        <div class="col-md-4">
            <form action="" method="">
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
                <tr>
                    <th>NIM</th>
                    <th>Nama Peserta</th>
                    <th>Nama Fasilitator</th>
                    <th>Nilai Akhir</th>
                    <th>Presensi</th>
                    <th>Total Nilai</th>
                    <th>Konversi Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilaiList as $data)
                    <tr>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->nama_peserta }}</td>
                        <td>{{ $data->nama_fasilitator }}</td>
                        <td>{{ $data->nilai_akhir }}</td>
                        <td>{{ $data->presensi }}</td>
                        <td>{{ $data->total_nilai }}</td>
                        <td>{{ $data->konversi_nilai }}</td>
                        <td>
                            <a href="/udahDataNilai/{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/deleteDataNilai/{{ $data->id }}" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection