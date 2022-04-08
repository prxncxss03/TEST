@extends('structure')
@section('title','Home')
@section('loginForm')
<div class="d-flex justify-content-center w-100 h-100 align-items-center" > 

    <div id="loginIndex" class="container col-4">
            <div class="d-flex justify-content-center ">
                <i class="fa-solid fa-user"></i>
            </div>
            <h2 class="text-center mt-2">Welcome</h2>
            <div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="email" class="form-control" id="username" placeholder="Enter your username">
                
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
    </div>
</div>
@endsection