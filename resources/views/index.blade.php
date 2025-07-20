@extends('layouts.portal')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Welcome to the Fauna Website</h1>
        <p class="mb-8">Explore the diverse world of fauna and learn more about different species.</p>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Login</a>
            <a href="{{ route('register') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Register</a>
        </div>
    </div>
@endsection
