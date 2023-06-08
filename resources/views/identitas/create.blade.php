@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Identitas</h1>

        <form action="{{ route('identitas.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_identitas">Nama Identitas:</label>
                <input type="text" name="nama_identitas" id="nama_identitas" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="number" name="nip" id="nip" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="unit_eselon">Unit Eselon:</label>
                <input type="text" name="unit_eselon" id="unit_eselon" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="satuan_kerja">Satuan Kerja:</label>
                <input type="text" name="satuan_kerja" id="satuan_kerja" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jenjang_pendidikan">Jenjang Pendidikan:</label>
                <input type="text" name="jenjang_pendidikan" id="jenjang_pendidikan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
