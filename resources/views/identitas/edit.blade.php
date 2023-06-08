@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Identitas</h1>

        <form action="{{ route('identitas.update', $identitas->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_identitas">Nama Identitas:</label>
                <input type="text" name="nama_identitas" id="nama_identitas" class="form-control"
                    value="{{ $identitas->nama_identitas }}" required>
            </div>

            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="number" name="nip" id="nip" class="form-control" value="{{ $identitas->nip }}"
                    required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ $identitas->jabatan }}"
                    required>
            </div>

            <div class="form-group">
                <label for="unit_eselon">Unit Eselon:</label>
                <input type="text" name="unit_eselon" id="unit_eselon" class="form-control"
                    value="{{ $identitas->unit_eselon }}" required>
            </div>

            <div class="form-group">
                <label for="satuan_kerja">Satuan Kerja:</label>
                <input type="text" name="satuan_kerja" id="satuan_kerja" class="form-control"
                    value="{{ $identitas->satuan_kerja }}" required>
            </div>

            <div class="form-group">
                <label for="jenjang_pendidikan">Jenjang Pendidikan:</label>
                <input type="text" name="jenjang_pendidikan" id="jenjang_pendidikan" class="form-control"
                    value="{{ $identitas->jenjang_pendidikan }}" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $identitas->jurusan }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
