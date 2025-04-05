<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-cover bg-center" style="background-image: url('{{ asset('images/fondo-dashboard.jpg') }}');">
        <div class="min-h-screen bg-blue-100 flex">
            
            <!-- Sidebar -->
            <aside class="w-64 bg-white shadow-lg p-4">
                <h2 class="text-lg font-bold mb-4">Menú</h2>
                <ul>
                    <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-200">📊 Dashboard</a></li>
                    <li><a href="#" class="block py-2 px-4 hover:bg-gray-200">👤 Usuarios</a></li>
                    <li><a href="profile" class="block py-2 px-4 hover:bg-gray-200">⚙️ Configuración</a></li>
                    <li><form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left py-2 px-4 hover:bg-red-500 text-red-700">
                            🚪 Cerrar sesión
                        </button>
                    </form>
                    </li>
                </ul>
            </aside>

            <!-- Contenido Principal -->
            <div class="flex-1">
                @include('layouts.navigation')

                <!-- Header -->
                @isset($header)
                    <header class="bg-blue-600 text-white shadow-md">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
