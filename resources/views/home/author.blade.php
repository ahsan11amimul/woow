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
                All posts
             </div>
             
             <div class="ms-auto">
                <a href="{{url('/post')}}" class="btn btn-success"> Add New </a>
            </div>
          </div>
          @foreach ($posts as $item)
              <div class="card mb-5 p-3" style="background: white;border-radius:2px solid white;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
               <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->body}}</p>
                    <p class="card-text">
                        <small>
                            Created By
                        </small>
                        <strong>{{$item->user->name}}</strong>
                        <small class="text-muted">
                           {{$item->created_at?$item->created_at->diffForHumans():''}}
                        </small>
                    </p>
                    <div class="d-flex">
                    <div class="ms-auto">
                     <a class="btn btn-secondary" href="{{url('post/'.$item->id)}}">Read More</a>
                    </div>
                    </div>

                </div>
                
            </div>
          @endforeach
            
            
        </div>
    </div>
@endsection