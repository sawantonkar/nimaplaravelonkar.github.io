@extends('layout')
@section('page_title','CREATE')
@section('section1')
<h2 class="text-center">Edit category name</h2>
@include('messages')
<form method="POST" action="{{url('category/'.$category->id)}}">
    @csrf
    @method('PATCH')
    <div class="form-group">
    <label>Category name</label>
    <input name="category_name" type="text" class="form-control" value="{{$category->category_name}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
 </form>
 @endsection