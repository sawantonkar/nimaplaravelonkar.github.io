@extends('layout')
@section('page_title','CREATE')
@section('section1')
<h2 class="text-center">Enter Product</h2>
@include('messages')
<form method="POST" action="{{url('product')}}">
@csrf
 <div class="form-group">
 <label>Select category</label>
    <select name="category_id" class="form-control">
        @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
        @endforeach
    </select>
 
 </div>
 
 <div class="form-group">
 <label>Product title</label>
 <input name="title" type="text" class="form-control">
 </div>

 <div class="form-group">
 <label>Product description</label>
 <textarea class="form-control" name="description"></textarea>
 </div>
 
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 @endsection