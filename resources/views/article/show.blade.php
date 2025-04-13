@extends('layouts.app')

@section('title', $article->name)

@section('content')
    <p>
        {{ $article->body }}
    </p>
@endsection
