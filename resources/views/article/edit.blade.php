@extends('layouts.app')

@section('title', 'Edit Article')

@section('content')
    <div class="mt-20">
        {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
            @include('article.form')
            <div class="mt-6 flex items-center justify-end gap-x-6">
                {{ html()->submit('Edit')->class('rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600') }}
            </div>
        {{ html()->closeModelForm() }}
    </div>
@endsection
