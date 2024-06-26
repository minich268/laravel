<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
       <meta name="description" content="TattoosCalculator - devis tatouage en ligne, réservation et estimation prix de tatouage. ">
       <meta data-n-head="ssr" property="og:type" content="{{$og_type}}">
    <meta data-n-head="ssr" property="og:title" content="{{$og_title}}">
    <meta data-n-head="ssr" property="og:site_name" content="{{$og_title}}">
    <meta data-n-head="ssr" property="og:url" content="{{$og_url}}">
    <meta data-n-head="ssr" property="og:image" content="{{$og_image}}">
    <meta data-n-head="ssr" property="og:description" content="{{$og_description}}">
    <meta data-n-head="ssr" property="product:plural_title" content="{{$product_plural_title}}">
    <meta data-n-head="ssr" name="thumbnail" content="{{$og_image}}">
    <meta data-n-head="ssr" name="twitter:title" content="{{$og_title}}">
    <meta data-n-head="ssr" name="twitter:description" content="{{$og_description}}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
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
                @yield('content')
            </main>
        </div>
        @livewireScripts
    </body>
</html>
