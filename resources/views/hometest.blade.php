@extends("master")
@section("content")
    <form action="{{route('home')}}" method="GET">
        <input type="text" name="search" value="{{$search}}">
        <button>Tim kiem</button>
    </form>
    <hr>
    <form action="{{route('them')}}" method="post">
        @csrf
        Name<input type="text" name="name"><br>
        Content<input type="text" name="content"><br>
        <button>Them</button>
    </form>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Content</td>
        </tr>
        @foreach($listCategory as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->content}}</td>
            </tr>
        @endforeach
    </table>

@endsection
