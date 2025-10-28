<!DOCTYPE html>
<html lang="tk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Futbol Täzelikleri')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    @include('nav.nav') <main class="container mx-auto mt-8 px-4">
        @yield('content')
    </main>

    <footer class="mt-12 py-6 text-center text-sm text-gray-500 bg-white shadow-inner">
        &copy; {{ date('Y') }} Futbol Täzelikleri. Ähli hukuklar goralan.
    </footer>

</body>
</html>
