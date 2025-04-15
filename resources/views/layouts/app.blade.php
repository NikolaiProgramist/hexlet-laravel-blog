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
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                                <a href="{{ route('articles.create') }}">
                                    <span class="absolute -inset-1.5"></span>
                                </a>
                                <span class="sr-only">New article</span>
                                <svg class="size-5" fill="white" viewBox="0 0 45.402 45.402">
                                    <g>
                                        <path d="M41.267,18.557H26.832V4.134C26.832,1.851,24.99,0,22.707,0c-2.283,0-4.124,1.851-4.124,4.135v14.432H4.141
                                            c-2.283,0-4.139,1.851-4.138,4.135c-0.001,1.141,0.46,2.187,1.207,2.934c0.748,0.749,1.78,1.222,2.92,1.222h14.453V41.27
                                            c0,1.142,0.453,2.176,1.201,2.922c0.748,0.748,1.777,1.211,2.919,1.211c2.282,0,4.129-1.851,4.129-4.133V26.857h14.435
                                            c2.283,0,4.134-1.867,4.133-4.15C45.399,20.425,43.548,18.557,41.267,18.557z"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="flex justify-end w-full h-14 mt-5 mx-auto max-w-7xl">
            @yield('flash')
        </div>

        <main>
            <div class="bg-white pt-24 sm:pt-32">
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
