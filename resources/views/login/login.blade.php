@extends('base')

@section('content')
    <div class="relative"> <img src="{{ asset('image/fauna/singa_1.jpg') }}" class="w-full" alt="Singa Image">
        <div class="absolute inset-0 flex flex-column justify-end items-center">
            <div class="bg-black opacity-50 w-1/2 h-full">
            </div>
        </div>
    </div>
@endsection