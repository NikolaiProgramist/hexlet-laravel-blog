@extends('layouts.app')

@section('title', 'Articles')

@section('flash')
    @if($flashMessage)
        <div class="bg-green-100 w-70 h-full rounded-md">
            <div class="flex">
                <svg class="size-6 mt-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#00ca53" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd"></path></svg>
                <span class="mt-4 ml-2 line-clamp-3 text-sm/6 text-green-700">{{ $flashMessage }}</span>
            </div>
        </div>
    @endif
@endsection

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
