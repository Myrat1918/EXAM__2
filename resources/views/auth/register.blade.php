@extends('layout.app')

@section('title', 'Täze Hasaba Durmak')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg p-4">
                    <h2 class="card-title text-center text-success mb-4">Täze Admin Hasaby</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Ady</label>
                            <input type="text" id="name" name="name" required autofocus
                                   class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" id="email" name="email" required
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Parol</label>
                            <input type="password" id="password" name="password" required
                                   class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold">Paroly Gaýtala</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                   class="form-control">
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-success fw-bold">
                                Hasaba Dur
                            </button>
                        </div>

                        <p class="text-center text-muted mt-3">
                            Hasabyňyz barmy?
                            <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Giriň</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
