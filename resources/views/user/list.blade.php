@extends('master')
@section('content')
    <form action="{{route('them_user')}}" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <button>Them</button>
    </form>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach($listUser as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>
@endsection
