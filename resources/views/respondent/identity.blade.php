@extends('layout.main')

@section('title', 'Respondent-EcommerceSurvey')

@section('content')
<form action="/Respondent/create" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col px-1">
                <h3 class='text.left'>Respondent</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <label for="text-body">Full Name</label>
        <div class="row">
            <div class="col-3">
                <input name="first_name" type="text" class="form-control" placeholder="First Name"> 
            </div>
            <div class="col-3">
                <input name="last_name" type="text" class="form-control " placeholder="Last Name">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">Phone Number</label>
                <input name="phone_number" type="text" class="form-control" placeholder="Phone Number"> 
            </div>
            <div class="col-3 my-2">
                <label for="text-body">Email Address</label>
                <input name="email" type="text" class="form-control" placeholder="Email">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">Gender</label>
                <select name="gender" class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            <div class="col-3 my-2">
                <label for="text-body">Birthdate</label>
                <input name="birthdate" type="text" class="form-control" placeholder="Birthdate">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">Country</label>
                <select name="country_id" class="form-control">
                    <@foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                     @endforeach
                </select>
            </div>
            <div class="col-3 my-2">
                <label for="text-body">Address</label>
                <input name="address" type="text" class="form-control" placeholder="Address">
            </div>
            <div class="col-2 my-2">
                <label for="text-body">Zipcode</label>
                <input name="zip_code" type="text" class="form-control" placeholder="Zipcode">
            </div>
        </div>
    </div>

    <div class="container">
         <div class="row">
            <div class="col-3 my-2">
                <label for="text-body">Survey</label>
                <select name="survey_id" class="form-control">
                    @foreach($surveys as $survey)
                        <option value="{{ $survey->id }}">{{ $survey->store }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3 my-2">
                <label for="text-body">Occupation</label>
                    <input name="Occupation" type="text" class="form-control" placeholder="Occupation">
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <a href="Respondent/Survey" class="btn btn-outline-info btn-md my-4">Next</a> -->
                <button type="submit" class="btn btn-outline-info btn-md my-4">Next</button>
            </div>
        </div>
    </div>
</form>
@endsection