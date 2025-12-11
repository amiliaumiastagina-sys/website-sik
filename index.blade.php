@extends('layouts.main')

@section('content')
<h1 class="text-3xl font-bold mb-8 text-blue-700 tracking-wide">Menu Laporan</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <a href="{{ route('reports.kunjungan') }}" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition flex flex-col items-start gap-4">
        <i data-feather="user" class="w-8 h-8 text-blue-600"></i>
        <h2 class="text-xl font-semibold text-gray-700">Laporan Kunjungan Pasien</h2>
        <p class="text-gray-500 text-sm">Lihat seluruh riwayat kunjungan pasien berdasarkan tanggal, poli, dan dokter.</p>
    </a>

    <a href="{{ route('reports.obat') }}" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition flex flex-col items-start gap-4">
        <i data-feather="package" class="w-8 h-8 text-green-600"></i>
        <h2 class="text-xl font-semibold text-gray-700">Laporan Obat Keluar/Masuk</h2>
        <p class="text-gray-500 text-sm">Monitor stok obat, kategori, dan riwayat keluar/masuk obat.</p>
    </a>

    <a href="{{ route('reports.pendapatan') }}" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition flex flex-col items-start gap-4">
        <i data-feather="credit-card" class="w-8 h-8 text-yellow-600"></i>
        <h2 class="text-xl font-semibold text-gray-700">Laporan Pendapatan</h2>
        <p class="text-gray-500 text-sm">Rekap semua pembayaran dan billing pasien secara detail.</p>
    </a>

    <a href="{{ route('reports.tindakan') }}" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition flex flex-col items-start gap-4">
        <i data-feather="activity" class="w-8 h-8 text-red-600"></i>
        <h2 class="text-xl font-semibold text-gray-700">Laporan Tindakan Medis</h2>
        <p class="text-gray-500 text-sm">Rekap seluruh tindakan medis yang dilakukan dokter.</p>
    </a>
</div>

<script>
    feather.replace();
</script>
@endsection
