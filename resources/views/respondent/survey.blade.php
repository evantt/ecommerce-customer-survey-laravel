@extends('layout.main')

@section('title', 'Survey-EcommerceSurvey')

@section('content')

<!-- <form>
<div class="container">
<label for="exampleInputProfile1 text-body">Product</label>
  <div class="row">
    <div class="col-3">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-3">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <div class="row">
    <div class="col-3">
      <input type="text" class="form-control my-1" placeholder="Phone Number">
    </div>
  </div>
  <div class="row">
    <div class="col-3">
      <input type="text" class="form-control my-1" placeholder="Email">
    </div>
  </div>
</div>
</form> -->

  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

  


  <div class="container">
    <div class="row">
      <div class="col px-1">
        <h3 class=text-left>Survey</h3>
      </div>
    </div>
  </div>

<form method="post" action="/Survey/create">
  <div class="container">
    <div class="row">
      <div class="col-3 my-2">
      <label for="text-body">Product Categories</label>
      <select name="product_id" class="form-control">
        <@foreach($products as $product)
          <option value="{{ $product->id }}">{{ $product->category }}</option>
        @endforeach
      </select>
      </div>
      <div class="col-3 my-2">
      <label for="text-body">Product Name</label>
        <input type="text" class="form-control" placeholder="Name">
      </div>
      <div class="col-3 my-2">
      <label for="text-body">Product Quantity</label>
        <input type="text" class="form-control" placeholder="Quantity">
      </div>
      <div class="col-3 my-2">
      <label for="text-body">Product Price</label>
        <input type="text" class="form-control" placeholder="TotalPrice">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-3 my-2">
      <label for="text-body">Shipment Services</label>
      <select name="shipment_id" class="form-control">
        <@foreach($shipments as $shipment)
          <option value="{{ $shipment->id }}">{{ $shipment->service }}</option>
        @endforeach
      </select>
      </div>
      <div class="col-3 my-2">
      <label for="text-body">Shipment Cost</label>
        <input type="text" class="form-control" placeholder="Cost">
      </div>
      <div class="col-3 my-2">
      <label for="text-body">Shipment Time</label>
        <input type="text" class="form-control" placeholder="Time">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-3 my-2">
          <label for="text-body">Payment Methods</label>
          <select name="payment_id" class="form-control">
          <@foreach($payments as $payment)
            <option value="{{ $payment->id }}">{{ $payment->method }}</option>
          @endforeach
        </select>
      </div>  
    </div>
  </div>
  @csrf
  <div class="container">
    <div class="row">
      <div class="col">
        <button type="submit" class="btn btn-outline-info btn-md my-4">Submit</button>
              <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-outline-info btn-md my-4" data-toggle="modal" data-target="#staticBackdrop">
        Submit
        </button> -->
</form>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Submitted</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Thankyou for your participation :)
              </div>
              <!-- <div class="modal-footer">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection