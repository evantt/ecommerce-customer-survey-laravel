@extends('layout.main')

@section('title', 'Login-EcommerceSurvey')

@section('content')
    <form>
        <div class="container">
            <div class="row">
                <div class="col px-1">
                    <h3 class=text-left>Admin Login</h3>
                </div>
            </div>
        </div>
        <div class="container">
        <!-- <div class="mx-auto" style="width: 200px;"> -->
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="exampleInputUsername1 text-body">Username</label>
                        <input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1 text-body">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <button type="button" class="btn btn-outline-info btn-sm">Login</button>
                    <a href="/Admin/Register" class="btn btn-outline-info btn-sm float-right">Register</a>
                </div>
            </div>
        </div>
    </form>
@endsection