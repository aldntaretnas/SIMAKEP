@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pegawai</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Posisi</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="salary">Gaji</label>
            <input type="number" name="salary" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection