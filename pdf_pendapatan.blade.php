<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pendapatan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #f59e0b; text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; font-size: 12px; }
        th { background-color: #fef3c7; }
        tr:nth-child(even) { background-color: #fffbeb; }
    </style>
</head>
<body>
    <h2>Laporan Pendapatan</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pasien</th>
                <th>Total Biaya</th>
                <th>Tindakan</th>
                <th>Obat</th>
                <th>Administrasi</th>
                <th>Tanggal Bayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($billings as $bill)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $bill->patient->nama_lengkap ?? '-' }}</td>
                <td>Rp {{ number_format($bill->total_biaya,0,',','.') }}</td>
                <td>Rp {{ number_format($bill->tindakan,0,',','.') }}</td>
                <td>Rp {{ number_format($bill->obat,0,',','.') }}</td>
                <td>Rp {{ number_format($bill->administrasi,0,',','.') }}</td>
                <td>{{ \Carbon\Carbon::parse($bill->tanggal_bayar)->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
