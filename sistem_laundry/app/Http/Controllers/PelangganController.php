<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    private function rules(): array
    {
        return [
            'nama'   => 'required|string|max:100',
            'no_hp'  => 'required|string|max:20',
            'alamat' => 'nullable|string',
        ];
    }

    private function messages(): array
    {
        return [
            'nama.required'  => 'Nama pelanggan wajib diisi.',
            'no_hp.required' => 'Nomor HP wajib diisi.',
            'nama.max'       => 'Nama maksimal 100 karakter.',
            'no_hp.max'      => 'Nomor HP maksimal 20 karakter.',
        ];
    }

    public function index()
    {
        $pelanggans = Pelanggan::latest()->paginate(10);
        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules(), $this->messages());
        Pelanggan::create($data);
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $data = $request->validate($this->rules(), $this->messages());
        $pelanggan->update($data);
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diubah.');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus.');
    }
}