@extends('structure')
@section('title','Home')
@section('loginForm')
<div class="container content-wrapper">
        <div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="email" class="form-control" id="username" >
            
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        </div>
@endsection