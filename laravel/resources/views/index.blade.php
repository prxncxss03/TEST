@extends('structure')
@section('title','Home')
@section('loginForm')
<div id="loginIndex" class="container col-4">
        <div class="d-flex justify-content-center ">
            <i class="fa-solid fa-user"></i>
        </div>
        <h2 class="text-center mt-2">Admin</h2>
        <div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="email" class="form-control" id="username" >
            
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>
        </div>
@endsection