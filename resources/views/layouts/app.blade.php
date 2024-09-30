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
        @stack('styles')
        @stack('scripts')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-fuchsia-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="flex flex-col space-y-10 justify-center m-10">

<nav class="flex justify-center flex-wrap gap-6 text-gray-500 font-medium">
    <a class="hover:text-gray-900" href="#">Главная</a>
    <a class="hover:text-gray-900" href="/gallery">Галерея</a>
    <a class="hover:text-gray-900" href="/blogs">Новости</a>
    <a class="hover:text-gray-900" href="/contact">Контакты</a>
    <a class="hover:text-gray-900" href="/question">Вопрос-ответ</a>
    <a class="hover:text-gray-900" href="/review">Форма обратной связи</a>
</nav>

<div class="flex justify-center space-x-5">
    <a href="https://facebook.com/Елена Минич" target="_blank" rel="noopener noreferrer">
        <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
    </a>
       <a href="https://instagram.com/helenhelen2009" target="_blank" rel="noopener noreferrer">
        <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
    </a>
   </div>
<p class="text-center text-gray-700 font-medium">&copy; 2024 Школа пластической гимнастики Венеры Невмержицкой.</p>
</footer>
@if(isset($_COOKIE['close']))
        <div>
            <a href="/cookie/close">&times;</a>
            cookie we user
        </div>
        @endif
    </body>
</html>
