@extends('layout.main')

@section('title','Admin-EcommerceSurvey')

@section('content')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
    </div>

    <button type="button" class="btn btn-outline-info float-right" data-toggle="modal" data-target="#staticBackdrop">
    +</button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Insert Respondent</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/Admin/create" method="POST">
                    {{csrf_field()}}
                    <div class="container">
                        <label for="text-body">Full Name</label>
                        <div class="row">
                            <div class="col">
                                <input name="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name">
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="col">
                                <input name="last_name" type="text" class="form-control " placeholder="Last Name">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col my-2">
                                <label for="text-body">Phone Number</label>
                                <input name="phone_number" type="text" class="form-control" placeholder="Phone Number"> 
                            </div>
                            <div class="col my-2">
                                <label for="text-body">Email Address</label>
                                <input name="email" type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col my-2">
                                <label for="text-body">Gender</label>
                                <select name="gender" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="col my-2">
                                <label for="text-body">Birthdate</label>
                                <input name="birthdate" type="text" class="form-control" placeholder="Birthdate">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col my-2">
                                <label for="text-body">Country</label>
                                <select name="country_id" class="form-control">
                                    <@foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col my-2">
                                <label for="text-body">Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="col my-2">
                                <label for="text-body">Zipcode</label>
                                <input name="zip_code" type="text" class="form-control" placeholder="Zipcode">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                    <div class="row">
                        <div class="col my-2">
                            <label for="text-body">Survey</label>
                            <select name="survey_id" class="form-control">
                            @foreach($surveys as $survey)
                                <option value="{{ $survey->id }}">{{ $survey->storename }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col my-2">
                            <label for="text-body">Occupation</label>
                            <input name="Occupation" type="text" class="form-control" placeholder="Occupation">
                        </div>
                    </div>
                        <button type="button" class="btn btn-outline-info my-3" data-dismiss="modal" >Back</button>
                        <button type="submit" class="btn btn-outline-info float-right my-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>


    <h3>Respondent Database</h3> 

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Resp_Id</th>
                <th scope="col">Role</th>
                <th scope="col">Survey</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Birthdate</th>
                <th scope="col">Address</th>
                <th scope="col">Country</th>
                <th scope="col">ZipCode</th>
                <th scope="col">Occupation</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($respondents as $respondent)
            <tr>
                <td>{{$respondent->id}}</td>
                <td>{{$respondent->role}}</td>
                <td>{{$respondent->survey_id}}</td>
                <td>{{$respondent->first_name}}</td>
                <td>{{$respondent->last_name}}</td>
                <td>{{$respondent->phone_number}}</td>
                <td>{{$respondent->email}}</td>
                <td>{{$respondent->gender}}</td>
                <td>{{$respondent->birthdate}}</td>
                <td>{{$respondent->address}}</td>
                <td>{{$respondent->country_id}}</td>
                <td>{{$respondent->zip_code}}</td>
                <td>{{$respondent->occupation}}</td>
                <td>
                    <a href="/Admin/{{$respondent->id}}/edit" class="badge badge-success">edit</a>
                    <!-- <a href="" class="badge badge-danger">delete</a> -->
                    <form action="/Admin/{{$respondent->id}}/delete" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger">Delete</button>
                    </form>
                </td>
            </tr>
             @endforeach
        </tbody>
    </table>

    <button type="button" class="btn btn-outline-info float-right" data-toggle="modal" data-target="#AddSurvey">
    +</button>

    <!-- Modal -->
    <div class="modal fade" id="AddSurvey" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="AddSurveyLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="AddSurveyLabel">Insert Survey</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/Admin/create" method="POST">
                    {{csrf_field()}}
                    <div class="container">
                        <label for="text-body">Respondent</label>
                        <div class="row">
                            <div class="col">
                                <input name="resp_id" type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('resp_id') }}" placeholder="Resp_id">
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col my-2">
                                <label for="text-body">Product</label>
                                <select name="product_id" class="form-control">
                                    <@foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col my-2">
                                <label for="text-body">Shipment</label>
                                <select name="shipment_id" class="form-control">
                                    <@foreach($shipments as $shipment)
                                        <option value="{{ $shipment->id }}">{{ $shipment->service }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                    <div class="row">
                        <div class="col my-2">
                            <label for="text-body">Payment</label>
                            <select name="payment_id" class="form-control">
                            @foreach($payments as $payment)
                                <option value="{{ $payment->id }}">{{ $payment->method }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                        <button type="button" class="btn btn-outline-info my-3" data-dismiss="modal" >Back</button>
                        <button type="submit" class="btn btn-outline-info float-right my-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <h3>Survey Database</h3> 

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Resp_Id</th>
                <!-- <th scope="col">Resp_name</th> -->
                <th scope="col">Product_Id</th>
                <th scope="col">Shipment_Id</th>
                <th scope="col">Payment_Id</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->resp_id}}</td>
                <!-- <td>{{$order->first_name}}</td> -->
                <td>{{$order->product_id}}</td>
                <td>{{$order->shipment_id}}</td>
                <td>{{$order->payment_id}}</td>
                <td>
                    <a href="/Admin/{{$order->id}}/edit" class="badge badge-success">edit</a>
                    <form action="/Admin/{{$order->id}}/delete" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger">Delete</button>
                    </form>
                </td>
            </tr>
             @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-outline-info float-right my-3">Logout</button>
@endsection