@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Identitas</h1>

        <table class="table">
            <tr>
                <th>NIP:</th>
                <td>{{ $identitas->nip }}</td>
            </tr>
            <tr>
                <th>Nama:</th>
                <td>{{ $identitas->nama_identitas }}</td>
            </tr>
            <tr>
                <th>Jabatan:</th>
                <td>{{ $identitas->jabatan }}</td>
            </tr>
            <tr>
                <th>Unit Eselon:</th>
                <td>{{ $identitas->unit_eselon }}</td>
            </tr>
            <tr>
                <th>Satuan Kerja:</th>
                <td>{{ $identitas->satuan_kerja }}</td>
            </tr>
            <tr>
                <th>Jenjang Pendidikan:</th>
                <td>{{ $identitas->jenjang_pendidikan }}</td>
            </tr>
            <tr>
                <th>Jurusan:</th>
                <td>{{ $identitas->jurusan }}</td>
            </tr>
        </table>

        <a href="{{ route('identitas.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
