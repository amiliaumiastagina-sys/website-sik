<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Obat Keluar/Masuk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #16a34a; text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; font-size: 12px; }
        th { background-color: #d1fae5; }
        tr:nth-child(even) { background-color: #f0fdf4; }
    </style>
</head>
<body>
    <h2>Laporan Obat Keluar/Masuk</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Stok Masuk</th>
                <th>Stok Keluar</th>
                <th>Sisa Stok</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicines as $medicine)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $medicine->nama_obat }}</td>
                <td>{{ $medicine->kategori->nama_kategori ?? '-' }}</td>
                <td>{{ $medicine->stok_masuk }}</td>
                <td>{{ $medicine->stok_keluar }}</td>
                <td>{{ $medicine->stok_sisa }}</td>
                <td>{{ \Carbon\Carbon::parse($medicine->tanggal)->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
