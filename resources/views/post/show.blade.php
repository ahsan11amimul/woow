@extends('layouts.master')
@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row m-4">
              @if (session()->has('success'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{session('success')}}
                    </div>
                @endif 
          <div class="d-flex p-3">
             
             <div class="p-2">
                Post Details
             </div>
             
             <div class="ms-auto">
                <a href="{{url('post/edit/'.$post->id)}}" class="btn btn-success"> Edit </a>
            </div>
          </div>
          
              <div class="card mb-5 p-3" style="background: white;border-radius:2px solid white;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
               <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->body}}</p>
                </div>
              </div>
              <div class="card mb-5 p-3" style="background: white;border-radius:2px solid white;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
               <div class="card-body">
                    <h5 class="card-title">Add a Comment</h5>
                     <form action="{{url('/comment')}}" method="POST">
                          @csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="mb-3">
                           
                            <input type="text" placeholder="Name" class="form-control" name="name" value="{{old('name')}}" style="background: white;border-radius:2px solid white;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-3">
                          <textarea name="body" class="form-control" placeholder="Comment" style="background: white;border-radius:2px solid white;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                          </textarea>                            
                        </div>
                        @error('body')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <button type="submit" class="btn btn-success">Submit Comment</button>
                     </form>
                </div>
              </div>
            
               @include('partials.comments', ['comments' =>$post->comments , 'post_id' => $post->id])
          
            
            
        </div>
    </div>
@endsection