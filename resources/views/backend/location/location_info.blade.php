@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
            <h1>Add a Location</h1>

              @if(session()->has('message'))
               <p class= "alert alert-success">{{session()->get('message')}}</p>
             @endif
           
            <form method="post" action="{{route('location.submit')}}">

            @csrf
              <div class="form-group">
                <label for="name">Enter Location Name</label>
                <input name="name" type="text" value="{{old('name')}}"  class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Location Name">
              @error('name') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group">
                <label for="entry fee">Enter Entry Fee</label>
                <input name="entry fee" type="text" class="form-control" id="entry fee" aria-describedby="emailHelp" placeholder="Enter Entry Fee">
                @error('entry fee') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group">`
                <label for="opening time from">Opening Time From</label>
                <input name="opening time from" type="text" class="form-control" id="opening time from" placeholder="Opening Time From">
              </div>

              <div class="form-group">`
                <label for="opening time to">Opening Time To</label>
                <input name="opening time to" type="text" class="form-control" id="opening time to" placeholder="Opening Time To">
              </div>

              <div class="form-group">`
                <label for="weekly holiday">Weekly Holiday</label>
                <input name="weekly holiday" type="text" class="form-control" id="weekly holiday" placeholder="Weekly Holiday">
              </div>



              <div class="form-group">`
                <label for="contact person name">Contact Person Name</label>
                <input name="contact person name" type="text" class="form-control" id="contact person name" placeholder="Contact Person Name">
              </div>

              <div class="form-group">`
                <label for="contact info">Contact Info</label>
                <input name="contact info" type="text" class="form-control" id="contact info" placeholder="Contact Info">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
         </div>
      </div>    
   </div> 
  </div>    
@stop