@extends('../layouts/layoutFasil')

@section('konten')
<div class="container mt-4">
    <h2>Data Penilaian</h2>
    
    <a href="/penilaian" class="btn btn-success my-2">Nilai Peserta</a>


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
                        <td>{{ $data->namaLengkap }}</td>
                        <td>{{ $data->nama }}</td>
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