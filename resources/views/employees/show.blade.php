@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pegawai</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $employee->name }}</h5>
            <p class="card-text">
                <strong>Posisi:</strong> {{ $employee->position }}<br>
                <strong>Gaji:</strong> {{ number_format($employee->salary, 2) }}
            </p>
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')">Hapus</button>
            </form>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection