@extends('layout.app')

@section('title', 'Iň Soňky Futbol Täzelikleri')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-2">Iň Soňky Täzelikler 📰</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse($posts as $post)
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">


                <h2 class="text-xl font-semibold text-gray-900 mb-2">
                    <a href="{{ route('posts.index', $post->slug) }}" class="hover:text-blue-600">
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="text-sm text-gray-500 mb-3">{{ $post->published_at->format('Y/m/d') }}</p>
                <p class="text-gray-600">{{ Str::limit(strip_tags($post->content), 100) }}</p>
            </div>
        @empty
            <p class="text-gray-500 col-span-3">Häzirlikçe hiç hili täzelik ýok.</p>
        @endforelse
    </div>
@endsection
