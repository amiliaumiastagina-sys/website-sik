@extends('layouts.main')

@section('content')
<h1 class="text-3xl font-bold mb-8 text-blue-700 tracking-wide">Edit Poli / Layanan Kesehatan</h1>

<div class="bg-white p-6 rounded-xl shadow max-w-4xl max-h-[80vh] overflow-y-auto">
    <form action="{{ route('polis.update', $poli->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-2 gap-6">

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Kode Poli</label>
                <input type="text" name="kode_poli" value="{{ old('kode_poli', $poli->kode_poli) }}" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Nama Poli</label>
                <input type="text" name="nama_poli" value="{{ old('nama_poli', $poli->nama_poli) }}" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="col-span-2">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('deskripsi', $poli->deskripsi) }}</textarea>
            </div>

            <div class="col-span-2">
                <label class="block text-gray-700 font-semibold mb-2">Ruangan</label>
                <input type="text" name="ruangan" value="{{ old('ruangan', $poli->ruangan) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="col-span-2">
                <label class="block text-gray-700 font-semibold mb-2">Pilih Dokter</label>
                <select name="doctors[]" multiple class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}" {{ in_array($doctor->id, $selectedDoctors) ? 'selected' : '' }}>
                            {{ $doctor->nama_lengkap }} ({{ $doctor->spesialisasi ?? '-' }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-span-2">
                <label class="inline-flex items-center gap-2 mt-2">
                    <input type="checkbox" name="status_aktif" class="form-checkbox h-5 w-5 text-blue-600" {{ $poli->status_aktif ? 'checked' : '' }}>
                    <span class="text-gray-700 font-semibold">Aktifkan Poli</span>
                </label>
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-2">
            <a href="{{ route('polis.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500 transition">Batal</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
@endsection
