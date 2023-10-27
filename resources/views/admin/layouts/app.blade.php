<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{asset('css/index.css')}}" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="bg-gray-200">
    <div>
        <!-- Main Sidebar Container -->
        @include('admin.layouts.sidebar')
        
        
        
        
        <div class="main-body">
            <nav class="header-main-menu flex">
            <button class="admin-tital nav-toggle"><i class="fa-solid fa-bars-staggered"></i></button>
            <div class="admin-tital">Shubham</div>
            </nav>

            @yield('content')
        </div>


    </div>

    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>