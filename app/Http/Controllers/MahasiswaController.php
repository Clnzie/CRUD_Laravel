<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    // Read all data mahasiswa
    public function index() {
        $mahasiswas = Mahasiswa::latest()->paginate(5);

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // Create tampilkan form tambah
    public function create() {
        return view('mahasiswa.create');
    }

    // Create simpan data mahasiswa
    public function store(Request $request) {
        $request->validate([
            'nim' => 'required|string|max:20|unique:mahasiswas,nim',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:mahasiswas,email',
            'jurusan' => 'required|string|max:255',
            'alamat' => 'nullable|string|',
        ]);

        Mahasiswa::create($validatedData = $request->all());

        return redirect()->route('mahasiswa.index')
        ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    // READ: tampilkan detail satu data
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    // UPDATE: tampilkan form edit
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // UPDATE: simpan perubahan
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $request->validate([
            'nim' => [
                'required', 'string', 'max:20',
                Rule::unique('mahasiswas', 'nim')->ignore($mahasiswa->id),
            ],
            'nama' => 'required|string|max:255',
            'email' => [
                'required', 'email', 'max:255',
                Rule::unique('mahasiswas', 'email')->ignore($mahasiswa->id),
            ],
            'jurusan' => 'required|string|max:255',
            'alamat'  => 'nullable|string',
        ]);
 
        $mahasiswa->update($validated);
 
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    // DELETE: hapus data mahasiswa
    public function destroy(Mahasiswa $mahasiswa) {
        
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
