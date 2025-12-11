@extends('layouts.main')

@section('content')
<h1 class="text-3xl font-bold mb-8 text-blue-700 tracking-wide">Detail Tagihan: {{ $billing->kode_tagihan }}</h1>

<div class="bg-white p-6 rounded-lg shadow space-y-4">
    <div>
        <p><strong>Pasien:</strong> {{ $billing->patient->nama_lengkap }}</p>
        <p><strong>Total Biaya:</strong> Rp {{ number_format($billing->total_biaya, 0, ',', '.') }}</p>
        <p><strong>Status:</strong> {{ $billing->status_lunas ? 'Lunas' : 'Belum Lunas' }}</p>
    </div>

    <table class="min-w-full border border-gray-200 rounded-xl overflow-hidden">
        <thead class="bg-blue-50">
            <tr>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Jenis Biaya</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Deskripsi</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($billing->details as $detail)
            <tr class="hover:bg-gray-100 border-b">
                <td class="px-6 py-4">{{ $detail->jenis_biaya }}</td>
                <td class="px-6 py-4">{{ $detail->deskripsi ?? '-' }}</td>
                <td class="px-6 py-4">Rp {{ number_format($detail->jumlah, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('billing.invoice', $billing->id) }}" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition flex items-center gap-2">
        <i data-feather="printer" class="w-5 h-5"></i> Cetak Invoice
    </a>
</div>

<script>
    feather.replace();
</script>
@endsection
