<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
<main>
    <div class="flex flex-col justify-center p-6 mx-auto space-y-4 items-center min-h-screen ">
        <x-application-logo class="w-24 h-24 fill-current text-primary"/>
        <x-button class="px-5" href="{{route('login')}}">Log in</x-button>
        <x-button href="{{route('register')}}">Sign up</x-button>


    </div>
</main>
</body>
</html>
