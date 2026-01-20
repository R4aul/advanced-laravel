<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema Escolar')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-light py-4 text-center">
        <p class="mb-0">© {{ date('Y') }} Sistema Escolar</p>
    </footer>

</body>

</html>
