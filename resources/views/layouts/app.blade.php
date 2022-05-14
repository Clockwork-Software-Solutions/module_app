<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-screen bg-gray-100">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Modules') }}</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }


        .loader {
            
            position: fixed;
            margin: 0 auto;
            padding-top: 12rem;
            padding-left: 41.5%;
            width: 100%;
            height: 100%;
            background-color: #f1f2f3;
            z-index: 9998;
            text-align: center;
        }

    </style>

</head>

<body class="h-full bg-gray-100">
    <div class ="loader">
    <img src="{{asset('storage/videos/preloader.svg')}}"/>    
    </div>
    <div class="min-h-full">
        

        <!-- Page Content -->
        <main class="">
        
            {{$slot}}
        </main>
        
    </div>
 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
       
        //window on load fade out preloader
        window.onload = function() {
            $(".loader").fadeOut(500);
        }
    </script>
    @livewireScripts
    {{-- @livewireChartsScripts --}}
    
    
</body>

</html>
