@extends('layouts.app')

@section('title', $article->name)

@section('content')
    <div class="mt-20">
        <p class="line-clamp-3 text-sm/6 text-gray-600">{{ $article->body }}</p>
    </div>
@endsection
