@extends('master')
@section('content')
    <p>{{ $user->id }}</p>
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($user->Articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>
                    <a href="{{ route('article_detail', ['id'=> $article->id]) }}">
                        {{ $article->title }}
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
