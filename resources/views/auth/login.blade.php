@extends('layout.app')

@section('title', 'Admin Giriş')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg p-4">
                    <h2 class="card-title text-center text-primary fw-bold mb-4">User Panel giris</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Username salgyňyz</label>
                            <input type="email" id="email" name="email" required autofocus
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Parol</label>
                            <input type="password" id="password" name="password" required
                                   class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary fw-bold">
                                Giriň
                            </button>
                        </div>

                        <p class="text-center text-muted mt-3">
                            Hasabyňyz ýokmy? <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">Hasaba duruň</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
