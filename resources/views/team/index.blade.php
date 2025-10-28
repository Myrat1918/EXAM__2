@extends('layout.app')

@section('title', 'Futbol Toparlary')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-2">Futbol Toparlary 🏆</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
        @forelse($teams as $team)
            <div class="bg-white p-4 rounded-lg shadow-md text-center hover:shadow-xl transition duration-300">
                {{-- @if($team->logo)
                    <img src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->name }} Logo" class="h-16 w-16 mx-auto mb-3 object-contain">
                @else --}}
                    <span class="text-4xl block mb-3">🛡️</span>
                {{-- @endif --}}

                <h2 class="text-lg font-semibold text-gray-800">{{ $team->name }}</h2>
                <p class="text-sm text-gray-500">{{ $team->city }}</p>
                <a href="{{ route('team', $team->slug) }}" class="text-blue-500 hover:underline text-xs mt-2 inline-block">Jikme-jik</a>
            </div>
        @empty
            <p class="text-gray-500 col-span-6">Häzirlikçe hiç hili topar ýazylmady.</p>
        @endforelse
    </div>
@endsection
