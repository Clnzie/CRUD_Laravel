@extends('layouts.app')
 
@section('title', 'Edit Mahasiswa')
 
@section('content')
<div class="card shadow-sm">
    <div class="card-header">Edit Data Mahasiswa</div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
            @method('PUT')
            @include('mahasiswa._form')
        </form>
    </div>
</div>
@endsection
