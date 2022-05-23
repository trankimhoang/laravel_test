@extends('master')
@section('content')
    <form action="{{route('bang_cuu_chuong')}}" method="get">
        Nhap bang cuu chuong can tinh: <input type="text" name="bcc" value="{{$bangcuuchuong}}">
        <button>Ket qua</button>
    </form>
    @for($i=1; $i<=10; $i++)
        <p>{{$bangcuuchuong}} x {{$i}} = {{$bangcuuchuong* $i}}</p>
    @endfor

@endsection
