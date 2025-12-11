<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kunjungan Pasien</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2>Laporan Kunjungan Pasien</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Poli</th>
                <th>Keluhan</th>
                <th>Diagnosa</th>
                <th>Tanggal Periksa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $record->patient->nama_lengkap ?? '-' }}</td>
                <td>{{ $record->doctor->nama_lengkap ?? '-' }}</td>
                <td>{{ $record->poli->nama_poli ?? '-' }}</td>
                <td>{{ $record->keluhan ?? '-' }}</td>
                <td>{{ $record->diagnosa ?? '-' }}</td>
                <td>{{ \Carbon\Carbon::parse($record->tanggal_periksa)->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
