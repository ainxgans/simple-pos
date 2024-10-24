<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>


<nav class="bg-blue-700 border-gray-200 dark:bg-gray-900 relative z-20">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse" wire:navigate.hover>
            <span class="text-white font-semibold text-2xl">MASPOS</span>
        </a>
        <div class="flex flex-row">
            <a href="#" class="text-white">
                Call us +62 817-1902-092
            </a>
        </div>
    </div>
</nav>

    <div class="absolute top-0 left-0 w-full mt-10 h-1/2 bg-blue-700 z-0"></div>
<div class="relative mx-auto container max-w-screen-xl z-10">

    {{ $slot }}
</div>

</body>
</html>
