<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800">
            ⚽ FUTBOL NEWS
        </a>

        <nav class="space-x-6">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600">Baş Sahypa</a>
            <a href="{{ route('teams.index') }}" class="text-gray-600 hover:text-blue-600">Toparlar</a>
            <a href="{{ route('players.index') }}" class="text-gray-600 hover:text-blue-600">Oýunçylar</a>

            @guest
                <a href="{{ route('login') }}" class="text-green-600 hover:text-green-800 border-l pl-6 ml-6">Admin Giriş</a>
            @else
                <a href="{{ url('/admin/dashboard') }}" class="text-red-600 hover:text-red-800 border-l pl-6 ml-6">Admin Panel</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-500 hover:text-red-500 text-sm">(Çykmak)</button>
                </form>
            @endguest
        </nav>
    </div>
</header>
