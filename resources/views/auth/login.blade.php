@extends('layouts.master')
@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row m-4 justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <h5 class="text-center text-primary">Login here</h5>
                    <form action="{{url('/signin')}}" method="post">
                        @csrf
                    <div class="row">
                                     @if (session()->has('error'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{session('error')}}
                    </div>
                @endif 
                        <div class="col-md-12 mb-2">
                            <label class="form-label">Email</label>
                            <div class="">
                                <input type="email" class="form-control" placeholder="info.sai4ul@gmail.com" name="email" value="{{old('email')}}">
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-2">
                            <label class="form-label">Password</label>
                            <div class="">
                                <input type="password" class="form-control" placeholder="Enter password" name="password">
                               
                               
                            </div>
                           @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-sm-12 mt-3">
                            <div class="text-center mt-50">
                                <button type="submit" class="btn btn-primary w-100 mb-60">Login</button>
                               
                            </div>
                            <p class="text-center text-muted mt-3">Don't have account?<a href="/signup">Register</a></p>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
           