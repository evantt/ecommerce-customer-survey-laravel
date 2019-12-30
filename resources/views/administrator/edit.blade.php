@extends('layout.main')

@section('title','Admin-EcommerceSurvey')

@section('content')
    <div class="container">
        <h3>Edit Respondent Database</h3>
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
    </div>
    
        <div class="container">
            <label for="text-body">Full Name</label>
            <div class="row">
                <div class="col-3">
                    <input name="first_name" type="text" class="form-control" value="{{ $respondents->first_name }}" placeholder="First Name">
                </div>
                <div class="col-3">
                    <input name="last_name" type="text" class="form-control " value="{{ $respondents->last_name }}" placeholder="Last Name">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3 my-2">
                    <label for="text-body">Phone Number</label>
                    <input name="phone_number" type="text" class="form-control" value="{{ $respondents->phone_number }}" placeholder="Phone Number"> 
                </div>
                <div class="col-3 my-2">
                    <label for="text-body">Email Address</label>
                    <input name="email" type="text" class="form-control" value="{{ $respondents->email }}" placeholder="Email">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3 my-2">
                    <label for="text-body">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="Male" {{ $respondents->gender === "Male" ? ' selected' : '' }}>Male</option>
                        <option value="Female" {{ $respondents->gender === "Female" ? ' selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="col-3 my-2">
                    <label for="text-body">Birthdate</label>
                    <input name="birthdate" type="text" class="form-control" value="{{ $respondents->birthdate }}" placeholder="Birthdate">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3 my-2">
                    <label for="text-body">Country</label>
                    <select name="country_id" class="form-control">
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}" {{ $country->id === $respondents->country_id ? ' selected' : '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3 my-2">
                    <label for="text-body">Address</label>
                    <input name="address" type="text" class="form-control" value="{{ $respondents->address }}" placeholder="Address">
                </div>
                <div class="col-3 my-2">
                    <label for="text-body">Zipcode</label>
                    <input name="zip_code" type="text" class="form-control" value="{{ $respondents->zip_code }}" placeholder="Zipcode">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-3 my-2">
                    <label for="text-body">Survey</label>
                    <select name="survey_id" class="form-control">
                        @foreach($surveys as $survey)
                            <option value="{{ $survey->id }}" {{ $survey->id === $respondents->survey_id ? ' selected' : '' }}>{{ $survey->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3 my-2">
                    <label for="text-body">Occupation</label>
                    <input name="birthdate" type="text" class="form-control" value="{{ $respondents->occupation }}" placeholder="Birthdate">
                </div>
            </div>
            <button type="button" class="btn btn-outline-info my-3">Back</button>
            <form action="{{$respondents->id}}" method="POST" class="d-inline">
            @method('patch')
            {{csrf_field()}}
            <button type="submit" class="btn btn-outline-info my-3">Submit</button>
            </form>
        </div>
@endsection