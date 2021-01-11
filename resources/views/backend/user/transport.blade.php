@extends('backend.master')
@section('main')

            @if(session()->has('msg'))
               <p class= "alert alert-success">{{session()->get('msg')}}</p>
             @endif

<h1>Add a Transport</h1>


<form  action="{{route('transport.submit')}}"method="POST">
@csrf
  <div class="form-group">
    <label for="vehicle_type">Vehicle Type</label>
    <input name="vehicle_type" type="name" class="form-control" id="vehicle_type" aria-describedby="emailHelp" placeholder="Enter Vehicle Type">
    
  </div>

  <div class="form-group">
    <label for="vehicle_name">Transport Name</label>
    <input name="vehicle_name"type="text" class="form-control" id="vehicle_name" placeholder="Destination to">
  </div>
  
  <div class="form-group">
    <label for="class">Class</label>
    <input name="class"type="text" class="form-control" id="class" placeholder="Enter Class">
  </div>

  <div class="form-group">
    <label for="company">Company</label>
    <input name="company"type="text" class="form-control" id="company" placeholder="Enter Company">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <input name="status"type="text" class="form-control" id="status" placeholder="Enter Status">
  </div>

  <div class="form-group">
    <label for="total_no_of_seat">Total no of Seat</label>
    <input name="total_no_of_seat"type="text" class="form-control" id="total_no_of_seat" placeholder="Enter Total no of Seat">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@stop