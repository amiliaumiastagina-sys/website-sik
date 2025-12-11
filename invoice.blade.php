<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Invoice {{ $billing->kode_tagihan }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f3f7fb; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Invoice Tagihan Pasien</h2>
        <p>Kode: {{ $billing->kode_tagihan }}</p>
    </div>

    <p><strong>Pasien:</strong> {{ $billing->patient->nama_lengkap }}</p>
    <p><strong>Status:</strong> {{ $billing->status_lunas ? 'Lunas' : 'Belum Lunas' }}</p>

    <table>
        <thead>
            <tr>
                <th>Jenis Biaya</th>
                <th>Deskripsi</th>
                <th>Jumlah (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($billing->details as $detail)
            <tr>
                <td>{{ $detail->jenis_biaya }}</td>
                <td>{{ $detail->deskripsi ?? '-' }}</td>
                <td>{{ number_format($detail->jumlah, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p><strong>Total Biaya:</strong> Rp {{ number_format($billing->total_biaya, 0, ',', '.') }}</p>
</body>
</html>
