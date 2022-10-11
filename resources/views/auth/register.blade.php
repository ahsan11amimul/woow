@extends('layouts.master')
@section('content')
    @include('partials.navbar')
    <div class="container">
        <div class="row m-4 justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <h5 class="text-center text-primary">Register here</h5>
                    <form action="{{url('/signup')}}" method="post">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-2">
                            <label class="form-label">Name</label>
                            <div class="">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                            </div>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-12 mb-2">
                            <label class="form-label">Role</label>
                            
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="">Select Roles</option>
                                   @foreach (App\Models\Role::all() as $item)
                                       <option value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach
                                </select>
                            @error('role_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror    
                            
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-label">Email</label>
                            <div class="">
                                <input type="email" class="form-control" placeholder="info.sai4ul@gmail.com" name="email" value="{{old('email')}}">
                            </div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-12 mb-2">
                            <label class="form-label">Password</label>
                            <div class="">
                                <input type="password" class="form-control" placeholder="Enter password" name="password">
                               
                               
                            </div>
                           @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-12 mb-2">
                            <label class="form-label">Confirm Password</label>
                            <div class="">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                              
                               
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="text-center mt-50">
                                <button type="submit" class="btn btn-primary w-100 mb-60">Register</button>
                               
                            </div>
                            <p class="text-center text-muted mt-3">Allready have account?<a href="/signin">Login</a></p>
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
           