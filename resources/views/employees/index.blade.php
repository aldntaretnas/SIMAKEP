@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pegawai</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Pegawai</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->salary }}</td>
                <td>
                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection