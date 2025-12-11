<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kesehatan</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Heroicons for Sidebar Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        body {
            font-family: 'Inter', 'Poppins', sans-serif;
            background: #f3f7fb;
        }

        /* Sidebar gradient */
        .sidebar-custom {
            background: linear-gradient(180deg, #0056d6 0%, #008cff 100%);
        }
    </style>
</head>

<body class="h-screen w-screen overflow-y-hidden overflow-x-hidden">

    <div class="flex h-full w-full">

        <!-- Sidebar -->
        <aside class="w-64 sidebar-custom text-white p-6 shadow-xl flex flex-col overflow-y-auto overflow-x-hidden">
            <h2 class="text-2xl font-bold tracking-wide mb-8">SI Kesehatan</h2>

            <!-- Sidebar Menu -->
            <nav class="mt-10">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 transition {{ request()->is('dashboard') ? 'bg-blue-100 font-semibold' : '' }}">
                            <i data-feather="home" class="w-5 h-5 text-blue-700"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('data-pasien.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 transition {{ request()->is('data-pasien*') ? 'bg-blue-100 font-semibold' : '' }}">
                            <i data-feather="user" class="w-5 h-5 text-blue-700"></i>
                            <span>Manajemen Pasien</span>
                        </a>
                    </li>

                    <li class="mb-1">
                        <a href="{{ route('doctors.index') }}" class="flex items-center gap-2 p-2 rounded-lg hover:bg-blue-100 transition">
                            <i data-feather="user-check" class="text-blue-600"></i>
                            <span>Dokter & Tenaga Medis</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('polis.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 transition {{ request()->is('polis*') ? 'bg-blue-100 font-semibold' : '' }}">
                            <i data-feather="briefcase" class="w-5 h-5 text-blue-700"></i>
                            <span>Poli / Layanan Kesehatan</span>
                        </a>
                    </li>

                    <li>
                        <a href="/medical_records"
                        class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 transition">
                            <i data-feather="file-text" class="w-5 h-5 text-blue-700"></i>
                            <span>Rekam Medis</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('apotek.obat.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 transition {{ request()->is('apotek/obat*') ? 'bg-blue-100 font-semibold' : '' }}">
                            <i data-feather="package" class="w-5 h-5 text-blue-700"></i>
                            <span>Obat & Stok Apotek</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('billing.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 transition {{ request()->is('billing*') ? 'bg-blue-100 font-semibold' : '' }}">
                            <i data-feather="credit-card" class="w-5 h-5 text-blue-700"></i>
                            <span>Pembayaran / Billing</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('reports.index') }}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-100 transition">
                            <i data-feather="bar-chart-2" class="w-5 h-5 text-blue-700"></i>
                            <span>Laporan</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto overflow-x-hidden">
            @yield('content')
        </main>

    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>
