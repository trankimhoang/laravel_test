@extends('master')


@section('content')
    <h1>{{ $article->title }}</h1>
    <p>
        <a href="{{ route('user_detail',['id' => $article->User->id]) }}">
            {{ $article->User->name }}
        </a>
    </p>
    <p>{!! $article->content !!}</p>

@endsection
