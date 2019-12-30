@extends('layout.main')

@section('title', 'Register-EcommerceSurvey')

@section('content')
<form>
    <div class="container">
        <div class="row">
            <div class="col px-1">
                <h3 class='text.left'>Register</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <label for="text-body">Username</label>
        <div class="row">
            <div class="col-3">
                <input type="text" class="form-control" placeholder="Username"> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">Password</label>
                <input type="text" class="form-control" placeholder="Password"> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">Email</label>
                <input type="text" class="form-control" placeholder="Email">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">StoreName</label>
                <input type="text" class="form-control" placeholder="StoreName">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">Website</label>
                <input type="text" class="form-control" placeholder="Website">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <button type="button" onclick="window.location='{{ url("Admin/Login") }}'" class="btn btn-outline-info btn-md ">Back</button>
                <button type="button" class="btn btn-outline-info btn-md ml-5">Register</button>
            </div>
        </div>
    </div>

</form>
@endsection