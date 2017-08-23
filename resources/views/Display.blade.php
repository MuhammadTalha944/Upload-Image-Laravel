@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th><h1><font color="black">ID</font></h1></th>
                <th><h1><font color="black">Title</font></h1></th>
                <th><h1><font color="black">Description</font></h1></th>
                <th><h1><font color="black">Profile Pic</font></h1></th>
            </tr>
            </thead>

            @foreach($blogs as $post)
            <tr>
                <td><font color="black">{{$post['id']}}</font></td>
                <td><font color="black">{{$post['title']}}</font></td>
                <td><font color="black">{{$post['description']}}</font></td>
                <td>
                <img src="http://localhost/NewLaravelProject/storage/app/{{$post['Image']}}" width="100" height="100">
                </td>
                    </tr>


            @endforeach
            <a href="/home" class="btn btn-warning">Add</a>

        </table>
    </div>
@endsection