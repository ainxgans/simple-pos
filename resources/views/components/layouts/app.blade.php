<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>


    <nav class="bg-blue-700 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse" wire:navigate.hover>
                <span class="text-white font-semibold text-2xl">MASPOS</span>
            </a>
            <div class="flex flex-row">
                <a href="{{route('logout')}}" class="text-white">
                    {{Auth::user()->name}}</a>
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                </svg>
            </div>
        </div>
    </nav>
    <div class="mx-auto container max-w-screen-xl">
        {{ $slot }}
    </div>
    </body>
</html>
