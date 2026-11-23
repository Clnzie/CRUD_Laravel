@extends('layouts.app')
 
@section('title', 'Detail Mahasiswa')
 
@section('content')
<div class="card shadow-sm">
    <div class="card-header">Detail Mahasiswa</div>
    <div class="card-body">
        <table class="table table-borderless mb-0">
            <tr><th style="width:150px">NIM</th><td>{{ $mahasiswa->nim }}</td></tr>
            <tr><th>Nama</th><td>{{ $mahasiswa->nama }}</td></tr>
            <tr><th>Email</th><td>{{ $mahasiswa->email }}</td></tr>
            <tr><th>Jurusan</th><td>{{ $mahasiswa->jurusan }}</td></tr>
            <tr><th>Alamat</th><td>{{ $mahasiswa->alamat ?: '-' }}</td></tr>
            <tr>
                <th>Dibuat</th>
                <td>{{ $mahasiswa->created_at->format('d M Y H:i') }}</td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </div>
</div>
@endsection
