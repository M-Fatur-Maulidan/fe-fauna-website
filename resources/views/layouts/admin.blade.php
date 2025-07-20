<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    {{-- CSS & JS khusus admin --}}
    @vite('resources/css/admin.css')
</head>
<body class="bg-slate-200">
    <div class="flex">
        {{-- Sidebar Admin --}}
        <aside class="w-64 bg-gray-800 text-white min-h-screen">
            <div class="p-4 font-bold">Admin Panel</div>
            <ul>
                <li class="p-4 hover:bg-gray-700">Dashboard</li>
                <li class="p-4 hover:bg-gray-700">Manajemen Fauna</li>
                <li class="p-4 hover:bg-gray-700">Pengguna</li>
            </ul>
        </aside>

        {{-- Konten Utama Admin --}}
        <main class="w-full p-8">
            @yield('content')
        </main>
    </div>
    @stack('scripts') {{-- Untuk script khusus per halaman admin --}}
</body>
</html>