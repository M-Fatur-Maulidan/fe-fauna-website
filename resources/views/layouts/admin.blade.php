<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Hapus blok <style> yang berisi semua kode Tailwind --}}

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-slate-200 min-h-screen flex">
    <aside class="w-64 bg-gray-800 text-white flex flex-col shrink-0">
        <a href="{{ route('home') }}">
            <div class="flex flex-row items-center justify-center">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-12 h-12">
                <div class="p-4 font-bold">Admin Panel</div>
            </div>
        </a>
        <div class="flex flex-col h-full">
            <div class="flex-grow">
                @if(session('api_token')['user']['roles'] == 'Admin')
                    <a href="{{ route('admin.dashboard') }}" class="block p-4 hover:bg-gray-700">Dashboard</a>
                    <a href="{{ route('admin.users') }}" class="block p-4 hover:bg-gray-700">Pengguna</a>
                @endif
                <a href="{{ route('admin.contents') }}" class="block p-4 hover:bg-gray-700">Manajemen Fauna</a>
                @if(session('api_token')['user']['roles'] == 'Admin')
                    <a href="{{ route('admin.contacts') }}" class="block p-4 hover:bg-gray-700">Feedback</a>
                @endif
            </div>
            <div class="">
                <a href="{{ route('logout') }}" class="block p-4 bg-red-700 hover:bg-red-800">Logout</a>
            </div>
        </div>
    </aside>

    {{-- Konten Utama Admin --}}
    <main class="w-full p-8 relative">
        @if ($errors->any())
            <div class="auto-hide-alert absolute top-5 left-1/2 -translate-x-1/2 bg-red-100 border border-red-500 text-red-700 p-4 rounded-lg z-50 w-auto max-w-md text-center">
                {{ $errors->first() }}
            </div>
        @endif
        @if(session('success'))
            <div class="auto-hide-alert absolute top-5 left-1/2 -translate-x-1/2 bg-green-100 border border-green-500 text-green-700 p-4 rounded-lg z-50 w-auto max-w-md text-center">
                {{ session('success') }}
            </div>
        @endif
        
        @yield('content')
    </main>
    
    @stack('scripts')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alertElements = document.querySelectorAll('.auto-hide-alert');
            alertElements.forEach(function(element) {
                setTimeout(function() {
                    element.style.transition = 'opacity 0.5s ease';
                    element.style.opacity = '0';
                    setTimeout(function() {
                        element.style.display = 'none';
                    }, 500);
                }, 3000);
            });
        });
    </script>
</body>
</html>