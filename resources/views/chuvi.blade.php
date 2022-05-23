@extends('master')

@section('content')
    <form action="{{route('tinh_chu_vi')}}" method="get">
        Chieu dai: <input type="text" name="chieudai" value="{{$chieudai}}">
        Chieu rong: <input type="text" name="chieurong" value="{{$chieurong}}">
        <button>Tinh</button>
    </form>
    <p>Chu vi la: {{$chuvi}}</p>
@endsection
