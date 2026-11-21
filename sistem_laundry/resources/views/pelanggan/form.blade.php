@csrf
<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
           value="{{ old('nama', $pelanggan->nama ?? '') }}">
    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">No HP</label>
    <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
           value="{{ old('no_hp', $pelanggan->no_hp ?? '') }}">
    @error('no_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $pelanggan->alamat ?? '') }}</textarea>
    @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<button class="btn btn-primary">Simpan</button>
<a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Batal</a>