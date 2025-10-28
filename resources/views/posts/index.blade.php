@extends('layout.app')

@section('title', $post->title)

@section('content')
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $post->title }}</h1>

        <div class="text-sm text-gray-500 mb-6 flex space-x-4">
            <span>📅 {{ $post->published_at->format('Y/m/d H:i') }}</span>
            <span class="font-semibold text-blue-600">{{ $post->category->name ?? 'Kategoriýasyz' }}</span>
        </div>

      

        <div class="prose max-w-none text-gray-700 leading-relaxed border-t pt-6">
            {!! nl2br(e($post->content)) !!}
        </div>

        <div class="mt-8 pt-4 border-t">
            <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800 font-medium">← Baş sahypa dolan</a>
        </div>
    </div>
@endsection
