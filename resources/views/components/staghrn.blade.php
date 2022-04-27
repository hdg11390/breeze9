<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Staghorn Labradors') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Swiper's CSS -->
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
        />
        <!-- Scripts -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    </head>
    <body class="bg-staghorn-100 ">
       


        <div class=" max-w-7xl mx-auto">
            <div class=" min-h-screen bg-staghorn-100">
                <div class="fixed w-full max-w-7xl mx-auto">
                @include('layouts.navigation')
                </div>
                <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class=" max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
    
                <!-- Page Content -->
                <main>
                
                    {{ $slot }}
                </main>
                <x-footer/>  
            </div>  
            
            </div>

       
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script> 
        <script src="{{ asset('js/swiper.js') }}"></script>
       
    </body>
</html>
