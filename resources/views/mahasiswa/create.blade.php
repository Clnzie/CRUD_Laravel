@extends('layouts.app')
 
@section('title', 'Tambah Mahasiswa')
 
@section('content')
<div class="card shadow-sm">
    <div class="card-header">Tambah Data Mahasiswa</div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @include('mahasiswa._form')
        </form>
    </div>
</div>
