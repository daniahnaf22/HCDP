@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Identitas</h1>

        <a href="{{ route('identitas.create') }}" class="btn btn-primary mb-3">Tambah Identitas</a>

        <table class="table">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Unit Eselon</th>
                    <th>Satuan Kerja</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($identitas as $data)
                    <tr>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->nama_identitas }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->unit_eselon }}</td>
                        <td>{{ $data->satuan_kerja }}</td>
                        <td>{{ $data->jenjang_pendidikan }}</td>
                        <td>{{ $data->jurusan }}</td>
                        <td>
                            <a href="{{ route('identitas.show', $data->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('identitas.edit', $data->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('identitas.destroy', $data->id) }}" method="POST"
                                style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
