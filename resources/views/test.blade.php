@extends('master')
@section('content')
    <form action="{{route('them_test')}}" method="post">
        @csrf
        <input type="text" name="name"><br>
        <input type="text" name="address">
        <button>Them</button>
    </form>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Address</td>
        </tr>
        @foreach( $listtest as $test )
            <tr>
                <td>{{$test->id}}</td>
                <td>{{$test->name}}</td>
                <td>{{$test->address}}</td>
            </tr>
        @endforeach
    </table>

@endsection
