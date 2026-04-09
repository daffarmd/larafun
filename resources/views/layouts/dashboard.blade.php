<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name', 'Laravel') . ' Dashboard' }}</title>
        <meta name="description" content="Modern minimalist dashboard template built with Laravel Blade.">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="dashboard-page font-sans antialiased">
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute left-[-10%] top-[-8rem] h-72 w-72 rounded-full bg-[radial-gradient(circle,_rgba(219,200,169,0.7),_transparent_68%)] blur-2xl"></div>
            <div class="absolute bottom-[-8rem] right-[-5%] h-80 w-80 rounded-full bg-[radial-gradient(circle,_rgba(172,201,190,0.8),_transparent_68%)] blur-2xl"></div>
        </div>

        <div class="relative min-h-screen px-4 py-5 lg:px-8 lg:py-7">
            @yield('content')
        </div>
    </body>
</html>
