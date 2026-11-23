@csrf
 
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" name="nim" id="nim"
        class="form-control @error('nim') is-invalid @enderror"
        value="{{ old('nim', $mahasiswa->nim ?? '') }}">
    @error('nim')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
 
<div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" name="nama" id="nama"
        class="form-control @error('nama') is-invalid @enderror"
        value="{{ old('nama', $mahasiswa->nama ?? '') }}">
    @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
 
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email"
        class="form-control @error('email') is-invalid @enderror"
        value="{{ old('email', $mahasiswa->email ?? '') }}">
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
 
<div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" name="jurusan" id="jurusan"
        class="form-control @error('jurusan') is-invalid @enderror"
        value="{{ old('jurusan', $mahasiswa->jurusan ?? '') }}">
    @error('jurusan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
 
<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea name="alamat" id="alamat" rows="3"
        class="form-control @error('alamat') is-invalid @enderror"
        >{{ old('alamat', $mahasiswa->alamat ?? '') }}</textarea>
    @error('alamat')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
 
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
