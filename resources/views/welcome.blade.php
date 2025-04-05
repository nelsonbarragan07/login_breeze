<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Gestión de Citas Médicas - Sincelejo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-blue-50 to-blue-100 flex items-center justify-center min-h-screen">
    
    <div class="text-center bg-white p-10 shadow-xl rounded-xl max-w-lg border border-gray-200">
        <!-- Logo -->
        <div class="flex justify-center">
            <img src="{{ asset('images/logo_clinica.png') }}" alt="Logo Clínica" class="w-24 h-24 object-cover">
        </div>

        <!-- Título -->
        <h1 class="text-3xl font-extrabold text-gray-800 mt-4">Gestión de Citas Médicas</h1>
        
        <!-- Descripción -->
        <p class="text-gray-600 mt-3 leading-relaxed">
            Sistema eficiente para programar citas médicas y gestionar la atención de pacientes en los centros de salud de Sincelejo.
        </p>

        <!-- Botones -->
        <div class="flex justify-center gap-4 mt-6">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-300">
                    Iniciar sesión
                </a>
            @endif
            
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="px-6 py-3 bg-gray-300 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-400 hover:shadow-lg transition duration-300">
                    Registrarse
                </a>
            @endif
        </div>
    </div>

</body>
</html>
