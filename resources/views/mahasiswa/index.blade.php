@extends('layouts.app')
 
@section('title', 'Data Mahasiswa')
 
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Data Mahasiswa</h4>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">
        + Tambah Data
    </a>
</div>
 
<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswas as $mhs)
                    <tr>
                        <td>{{ $mahasiswas->firstItem() + $loop->index }}</td>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td class="text-center">
                            <a href="{{ route('mahasiswa.show', $mhs) }}"
                               class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('mahasiswa.edit', $mhs) }}"
                               class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            Belum ada data mahasiswa.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
 
<div class="mt-3">
    {{ $mahasiswas->links() }}
</div>
@endsection
