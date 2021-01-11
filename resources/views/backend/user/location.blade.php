@extends('backend.master')
@section('main')

            @if(session()->has('msg'))
               <p class= "alert alert-success">{{session()->get('msg')}}</p>
             @endif`

<h1>Add a Location</h1>


<form  action="{{route('location.submit')}}"method="POST">
@csrf
  <div class="form-group">
    <label for="name">Location Name</label>
    <input name="name" type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Location Name">
    
  </div>
  <div class="form-group">
    <label for="opening_time_from">Opening Time From</label>
    <input name="opening_time_from"type="text" class="form-control" id="opening_time_from" placeholder="Enter Opening Time From">
  </div>

  <div class="form-group">
    <label for="opening_time_to">Opening Time To</label>
    <input name="opening_time_to"type="text" class="form-control" id="opening_time_to" placeholder="Enter Opening Time To">
  </div>

  <div class="form-group">
    <label for="weekly_holiday">Weekly Holiday</label>
    <input name="weekly_holiday"type="text" class="form-control" id="weekly_holiday" placeholder="Enter Weekly Holiday">
  </div>

  <div class="form-group">
    <label for="contact_person_name">Contact Person Name</label>
    <input name="contact_person_name"type="text" class="form-control" id="contact_person_name" placeholder="Enter Contact Person Name">
  </div>

  <div class="form-group">
    <label for="contact_person_phn_no">Contact Person Phone No</label>
    <input name="contact_person_phn_no"type="text" class="form-control" id="contact_person_phn_no" placeholder="Enter Contact Person Phone No">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@stop