@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <div>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($articles as $article)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex justify-between items-center w-full gap-x-4 text-xs">
                        <time datetime="{{ $article->created_at }}" class="text-gray-500">{{ $article->created_at }}</time>
                        <a href="{{ route('articles.edit', $article) }}" id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                            <span class="sr-only">Edit article</span>
                        </a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="{{ route('articles.show', ['id' => $article->id]) }}">
                                <span class="absolute inset-0"></span>
                                {{ $article->name }}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{ Str::limit($article->body, 200) }}</p>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-20">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
