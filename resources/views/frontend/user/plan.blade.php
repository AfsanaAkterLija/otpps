@extends('frontend.master')
@section('main')
<div class="container"style="margin-top:50px">
@if(session()->has('msg'))
   <p class= "alert alert-success">{{session()->get('msg')}}</p>
@endif
<h1>Add a package</h1>

<form method="POST" action="{{route('plan.submit')}}">
@csrf

 <div class="form-group">
    <label for="plan_type">Package Type</label>
    <input name="plan_type" type="text" class="form-control" id="plan_type" aria-describedby="emailHelp" placeholder="Enter Package Type">
  </div>


  <div class="form-group">
    <label for="name">Location Name</label>

    <select name="location" class="form-control">
    <option disabled="" selected=""></option>
    @foreach($tl as $row)
    <option value="{{$row->id}}">{{$row->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="vehicle_type">Transport Type</label>

    <select name="transport" class="form-control">
    <option disabled="" selected=""></option>
    @foreach($tt as $row)
    <option value="{{$row->id}}">{{$row->vehicle_type}}</option>
    @endforeach
    </select>
  </div>

  

  <div class="form-group">
    <label for="total_no_of_participants">Total no of participants</label>
    <input name="total_no_of_participants"type="number" class="form-control" id="total_no_of_participants" placeholder="Total no of participants">
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
    <input name="date_from" type="date" type="date" name="date" value="{{date('Y-m-d')}}"  min="{{date('Y-m-d')}}" class="form-control" id="date_from" placeholder="Date from">
  </div>

  <div class="form-group">
    <label for="date_to">Date to</label>
    <input name="date_to"type="date" value="{{date('Y-m-d')}}"  min="{{date('Y-m-d')}}" class="form-control" id="date_to" placeholder="Date to">
  </div>

  <div class="form-group">
    <label for="remarks">Remarks</label>
    <input name="remarks"type="text" class="form-control" id="remarks" placeholder="remarks">
  </div>

  <div class="form-group">
    <label for="token_money">Token Money</label>
    <input name="token_money"type="number" oninput="this.value=Math.abs(this.value)" min="1" class="form-control" id="token_money" placeholder="Enter Token Money">
  </div>

  <div class="form-group">
    <label for="approximate_budget">Approximate Budget</label>
    <input name="approximate_budget" type="number" oninput="this.value=Math.abs(this.value)" min="1" class="form-control" id="approximate_budget" placeholder="Enter Approximate Budget">
  </div>

  <div class="form-group">
    <label for="transaction_number">Transaction Number</label>
    <input name="transaction_number"type="text" class="form-control" id="transaction_number" placeholder="Enter Transaction Number">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>





@stop