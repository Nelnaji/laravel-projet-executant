<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>projet executant</title>
    @vite('resources/css/app.css')
</head>
<body >


    @if (Route::has('login'))
    <div class="hidden sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 no-underline hover:underline">Dashboard</a>
        @else

<div class="flex flex-col">

    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 no-underline hover:underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 no-underline hover:underline">Register</a>

</div>
            @endif
        @endauth
    </div>
@endif
</body>
</html>
