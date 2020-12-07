@extends('backend.master')
@section('main')
<h1>Add a package</h1>
<form method="post" action="{{route('plan.submit')}}">
@csrf
  <div class="form-group">
    <label for="plan_type">Package Type</label>
    <input name="plan_type" type="name" class="form-control" id="plan_type" aria-describedby="emailHelp" placeholder="Enter Package Type">
    
  </div>
  <div class="form-group">
    <label for="remarks">Description</label>
    <input name="remarks"type="text" class="form-control" id="remarks" placeholder="Description">
  </div>

  <div class="form-group">
    <label for="total_no_of_participants">Total no of participants</label>
    <input name="total_no_of_participants"type="text" class="form-control" id="total_no_of_participants" placeholder="Total no of participants">
  </div>

  <div class="form-group">
    <label for="destination_from">Destination From</label>
    <input name="destination_from"type="text" class="form-control" id="destination_from" placeholder="Destination from">
  </div>

  <div class="form-group">
    <label for="destination_to">Destination to</label>
    <input name="destination_to"type="text" class="form-control" id="destination_to" placeholder="Destination to">
  </div>

  <div class="form-group">
    <label for="date_from">Date from</label>
    <input name="date_from"type="text" class="form-control" id="date_from" placeholder="Date from">
  </div>

  <div class="form-group">
    <label for="date_to">Date to</label>
    <input name="date_to"type="text" class="form-control" id="date_to" placeholder="Date to">
  </div>

  <div class="form-group">
    <label for="remarks">Remarks</label>
    <input name="remarks"type="text" class="form-control" id="remarks" placeholder="remarks">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop