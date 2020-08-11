@extends('layout')
@section('section1')
<h2 class="text-center">View category</h2>
@include('messages')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Sr no.</th>
            <th>Category name</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $key=>$cat)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$cat->category_name}}</td>
            <td><a href="{{url('category/'.$cat->id)}}"><button class="btn btn-primary">Show Posts</button></a></td>
            <td><a href="{{url('category/'.$cat->id.'/edit')}}"><button class="btn btn-warning">Edit</button></a></td>
            <td>
                <form action="{{url('category/'.$cat->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$categories->links()}}
@endsection