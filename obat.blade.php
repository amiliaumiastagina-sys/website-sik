@extends('layouts.main')

@section('content')
<h1 class="text-3xl font-bold mb-8 text-green-700 tracking-wide">Laporan Obat Keluar/Masuk</h1>

<!-- Filter & Export -->
<div class="mb-6 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
    <form method="GET" action="{{ route('reports.obat') }}" class="flex gap-2 items-center">
        <input type="date" name="start_date" value="{{ request('start_date') }}" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        <input type="date" name="end_date" value="{{ request('end_date') }}" class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">Filter</button>
    </form>

    <div class="flex gap-2">
        <a href="{{ route('reports.obat', array_merge(request()->all(), ['export' => 'pdf'])) }}" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">Export PDF</a>
        <a href="{{ route('reports.obat', array_merge(request()->all(), ['export' => 'excel'])) }}" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">Export Excel</a>
    </div>
</div>

<!-- Table Scrollable -->
<div class="max-h-[500px] overflow-y-auto bg-white rounded-xl shadow border">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-green-50 sticky top-0">
            <tr>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">No</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Nama Obat</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Kategori</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Stok Masuk</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Stok Keluar</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Sisa Stok</th>
                <th class="px-6 py-3 text-left font-semibold text-gray-700">Tanggal</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach($medicines as $medicine)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                <td class="px-6 py-4">{{ $medicine->nama_obat }}</td>
                <td class="px-6 py-4">{{ $medicine->kategori->nama_kategori ?? '-' }}</td>
                <td class="px-6 py-4">{{ $medicine->stok_masuk }}</td>
                <td class="px-6 py-4">{{ $medicine->stok_keluar }}</td>
                <td class="px-6 py-4">{{ $medicine->stok_sisa }}</td>
                <td class="px-6 py-4">{{ \Carbon\Carbon::parse($medicine->tanggal)->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $medicines->withQueryString()->links() }}
</div>

<script>
    feather.replace();
</script>
@endsection
