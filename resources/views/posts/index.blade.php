@extends('layout.app')

@section('title', 'Tazelikler')

@section('content')
<div class="row row-cols-1">
    @foreach ($posts as $post)
        <div class="col ">
            <div class="card shadow-lg p-4 p-md-5 mb-5 bg-white">

        <h1 class="display-5 fw-bolder text-dark mb-4">{{ $post->title }}</h1>

        <div class="small text-muted mb-4 d-flex">
            <span class="fw-semibold text-primary">
                <i class="bi bi-tag-fill"></i> {{ $post->category->name ?? 'Kategoriýasyz' }}
            </span>
        </div>


        <div class="text-body border-top pt-4 fs-5">
            {!! nl2br(e($post->content)) !!}
        </div>

        <div class="mt-4 pt-3 border-top">
            <a href="{{ route('home.home') }}" class="btn btn-outline-primary btn-sm fw-semibold">
                ← Baş sahypa dolan
            </a>
        </div>
    </div>
        </div>
    @endforeach
</div>
    <div class="mt-3">
                    {{ $titles->links('pagination::bootstrap-5') }}
    </div>

@endsection
