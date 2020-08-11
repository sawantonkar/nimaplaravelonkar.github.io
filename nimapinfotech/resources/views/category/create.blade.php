@extends('layout')
@section('page_title','CREATE')
@section('section1')
    <h2 class="text-center">Enter category name</h2>
    @include('messages')
    <form method="POST" action="{{url('category')}}">
    @csrf
    <div class="form-group">
    <label>Category name</label>
    <input name="category_name" type="text" class="form-control" value="{{old('category_name')}}">
    </div>
    <p class="text-danger">{{$errors->first('category_name')}}</p>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 @endsection