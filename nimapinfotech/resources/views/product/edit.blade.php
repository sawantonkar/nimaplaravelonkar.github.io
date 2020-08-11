@extends('layout')
@section('page_title','CREATE')
@section('section1')
<h2 class="text-center">Edit Product</h2>
@include('messages')
<form method="POST" action="{{url('product/'.$product->id)}}">
@csrf
@method('PATCH')
 <div class="form-group">
 <label>Select category</label>
    <select name="category_id" class="form-control">
        @foreach($categories as $cat)
        <option value="{{$cat->id}}" @if($product->category_id == $cat->id) selected @endif>{{$cat->category_name}}</option>
        @endforeach
    </select>
 </div>
 
 <div class="form-group">
 <label>Title</label>
 <input name="title" type="text" class="form-control" value="{{$product->title}}">
 </div>

 <div class="form-group">
 <label>Description</label>
 <textarea class="form-control" name="description">{{$product->description}}</textarea>
 </div>
 
 <button type="submit" class="btn btn-primary">Update</button>

 </form>
 @endsection