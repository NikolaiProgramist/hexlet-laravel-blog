<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        <header>
            <nav class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-16 items-center justify-between">
                        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                            <div class="flex shrink-0 items-center">
                                <a href="{{ route('page.index') }}">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 20.5L14.5 3.5M18.5 7.5L22.5 12L18.5 16.5M5.5 16.5L1.5 12L5.5 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="hidden sm:ml-6 sm:block">
                                <div class="flex space-x-4">
                                    <a href="{{ route('articles.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">Articles</a>
                                    <a href="{{ route('page.about') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-700 hover:text-white">About</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w lg:mx-0 pb-10 border-b border-gray-200">
                        <h1 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">@yield('title')</h1>
                    </div>
                    @yield('content')
                </div>
            </div>
        </main>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
