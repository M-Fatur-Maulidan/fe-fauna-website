<div class="navbar bg-gray-50 shadow-md">
    <div class="container mx-auto">
        <div class="flex justify-between items-center py-4">
            <div class="flex flex-row items-center gap-x-2">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-12 h-12">
                <div class="text-lime-500 font-bold text-2xl">MINT</div>
            </div>
            <div class="flex flex-row  items-center justify-evenly w-1/2">
                <a href="{{ route('home') }}">
                    <div class="hover:bg-lime-500 hover:text-white p-1 px-2 rounded-lg">Home</div>
                </a>
                <a href="{{ route('gallery') }}">
                    <div class="hover:bg-lime-500 hover:text-white p-1 px-2 rounded-lg">Gallery</div>
                </a>
                <a href="{{ route('about') }}">
                    <div class="hover:bg-lime-500 hover:text-white p-1 px-2 rounded-lg">About</div>
                </a>
                <a href="{{ route('contact') }}">
                    <div class="hover:bg-lime-500 hover:text-white p-1 px-2 rounded-lg">Contact</div>
                </a>
                <a href="{{ route('login') }}">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Login</button>
                </a>
            </div>
        </div>
    </div>
</div>