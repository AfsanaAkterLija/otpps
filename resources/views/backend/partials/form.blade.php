@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
            <h1>Tour registration form</h1>

              @if(session()->has('message'))
               <p class= "alert alert-success">{{session()->get('message')}}</p>
             @endif
           
            <form method="post" action="{{route('form.submit')}}">

            @csrf
              <div class="form-group">
                <label for="exampleInputName">Enter Name</label>
                <input name="name" type="text" value="{{old('name')}}"  class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
              @error('name') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Enter Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                @error('email') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group">`
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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