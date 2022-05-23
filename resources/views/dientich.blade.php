@extends('master')
@section('content')
    <form action="{{route('tinh_dien_tich')}}" method="get">
        nhap chieu dai: <input type="text" name="chieudai" value="{{$chieudai}}" >
        nhap chieu rong: <input type="text" name="chieurong" value="{{$chieurong}}">
        <button>Ket qua</button>
    </form>
    <p>{{$dientich}}</p>
@endsection
