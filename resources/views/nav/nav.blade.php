<nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand fw-bold text-white fs-5">
            ⚽ FUTBOL NEWS
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link text-secondary">Baş Sahypa</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('teams.index') }}" class="nav-link text-secondary">Toparlar</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link text-secondary">Postlar</a>
                </li>

                @guest
                    <li class="nav-item border-start ps-3 ms-3">
                        <a href="{{ route('login') }}" class="nav-link text-success fw-semibold">Admin Giriş</a>
                    </li>
                @else
                    <li class="nav-item border-start ps-3 ms-3">
                        <a href="{{ url('/admin/dashboard') }}" class="nav-link text-danger fw-semibold">Admin Panel</a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline-block ms-3">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-link text-muted p-0 m-0 align-baseline text-decoration-none small hover:text-danger" style="margin-top: 2px;">
                                (Çykmak)
                            </button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
