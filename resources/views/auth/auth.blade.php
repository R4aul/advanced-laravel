<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    @include('layouts.nav')

     <main class="flex items-center justify-center py-12">
        <div class="w-full max-w-md bg-white shadow-lg rounded-xl p-8">
            <h1 class="text-2xl font-bold text-center mb-6">
                @yield('heading')
            </h1>

            @yield('content')
        </div>
    </main>

</body>
</html>
