@extends('layout')
@section('section1')
<h2 class="text-center">View Product</h2>
@include('messages')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Sr no.</th>
            <th>Product title</th>
            <th>Product description</th>
            <th>Category Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $key=>$prod)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$prod->title}}</td>
            <td>{{$prod->description}}</td>
            <td>{{$prod->category->category_name}}</td>
            <td><a href="{{url('product/'.$prod->id.'/edit')}}"><button class="btn btn-warning">Edit</button></a></td>
            <td>
                <form action="{{url('product/'.$prod->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$product->links()}}
@endsection