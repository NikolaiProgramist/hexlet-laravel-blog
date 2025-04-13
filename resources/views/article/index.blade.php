@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <div>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach($articles as $article)
                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="{{ $article->created_at }}" class="text-gray-500">{{ $article->created_at }}</time>
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
