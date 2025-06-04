@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pegawai</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="form-group">
            <label for="position">Posisi</label>
            <input type="text" name="position" class="form-control" value="{{ $employee->position }}" required>
        </div>
        <div class="form-group">
            <label for="salary">Gaji</label>
            <input type="number" name="salary" class="form-control" value="{{ $employee->salary }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection