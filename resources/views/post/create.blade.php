@extends('layouts.master')
@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row m-4">
 <form action="{{url('/post')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Post Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
  </div>
  @error('title')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <div class="mb-3">
    <label for="body" class="form-label">Post Message</label>
    <input type="text" class="form-control" id="body" name="body" value="{{old('body')}}">
  </div>
   @error('title')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            
        </div>
    </div>
@endsection