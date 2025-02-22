<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="pkl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <script src="{{ asset('assets/tinymce/tinymce/tinymce.min.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

        body {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;

        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-base-100">
    <div class="flex min-h-screen">
        @include('partials.Sidebar_students')
        <!-- Sidebar -->


        <!-- Main Content Area -->
        <div id="main-content" class="flex-1 lg:ml-64 ml-0 lg:w-auto lg:mb-0 mb-24 w-full transition-all">
            @include('partials.Navbar_students')
            <div class="mt-16 p-6">

                @yield('content')
            </div>
        </div>
    </div>
    
    @stack('js')
</body>

</html>
