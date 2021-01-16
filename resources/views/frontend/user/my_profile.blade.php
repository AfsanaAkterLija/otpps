@extends('frontend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
          <div style="padding-top:60px">
          <div class="table-responsive table--no-card m-b-30">
@if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif

              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
              @endif

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item active" role="personalinfo">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#personalinfo" role="tab" aria-controls="home" aria-selected="true">Personal Info</a>
  </li>
  <li class="nav-item" role="createdplan">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#createdplan" role="tab" aria-controls="profile" aria-selected="false">Created Plan</a>
  </li>
  <li class="nav-item" role="joinedplan ">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#joinedplan" role="tab" aria-controls="contact" aria-selected="false">Joined Plan </a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade active in" id="personalinfo" role="tabpanel" aria-labelledby="home-tab">
  <main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
  <div style="display:flex">
    <span style="font-weight:bold">User Image:</span>
    <div>
    <img src="{{asset('/uploads/user/'.auth()->user()->image)}}" alt="" style="
    width: 100px;
    height: 100px;
    object-fit: cover;
">
    </div>
    </div>
  <div class="form-group">
        <p>
        <label for="">User Name:</label>{{$tourist->name}}
        </p>

        <p>
        <label for="">User email:</label> {{$tourist->email}}
        </p>

        <p>
        <label for="">User NID:</label> {{$tourist->n_id}}
        </p>
        
        <p>
        <label for="">User Phone Number:</label> {{$tourist->phone_number}}
        </p>

        <p>
        <label for="">User Role:</label>{{$tourist->role}}
        </p>

        <p>
        <label for="">User status:</label>{{$tourist->status}}
        </p>
        
        <p>
        <label for="">User status:</label>{{$tourist->gender}}
        </p>

        <p>
        <label for="">User address:</label>{{$tourist->address}}
        </p>
      
    </div>
   
 </main>
</div>
  <div class="tab-pane fade" id="createdplan" role="tabpanel" aria-labelledby="profile-tab">
  
            <table class="table">
                <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Package Type</th>
                        <th scope="col">Planner Name</th>
                        <th scope="col">Location Name</th>
                        <th scope="col">Transport Type</th>
                        <th scope="col">Total no of participants</th>
                        <th scope="col">Destination From</th>
                        <th scope="col">Destination to</th>
                        <th scope="col">Date from</th>
                        <th scope="col">Date to</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Token Money</th>
                        <th scope="col">Approximate Budget</th>
                        <th scope="col">Transaction Number</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                <tbody>
                        @foreach($created_plan as $data)
                
                                <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->plan_type}}</td>
                                <td>{{$data->touristnamerelation->name}}</td>
                                <td>{{$data->locationnamerelation->name}}</td>
                                <td>{{$data->transportnamerelation->vehicle_type}}</td>
                                <td>{{$data->total_no_of_participants}}</td>
                                <td>{{$data->destination_from}}</td>
                                <td>{{$data->destination_to}}</td>
                                <td>{{$data->date_from}}</td>
                                <td>{{$data->date_to}}</td>
                                <td>{{$data->remarks}}</td>
                                <td>{{$data->token_money}}</td>
                                <td>{{$data->approximate_budget}}</td>
                                <td>{{$data->transaction_number}}</td>
                                <td>{{$data->is_approved}}</td>

                                

                                <td>
                                @if($data->is_approved=='not approved')
                                <a class="btn btn-warning" href="{{route('plan.edit',$data->id)}}">Edit</a>
                                @endif
                                

                                <a class="btn btn-success" href="{{route('tourist.list.per.plan')}}">Tourists List</a>
                                </td>
                                

                            </tr>
                        @endforeach
                </tbody>
            </table>

</div>
  <div class="tab-pane fade" id="joinedplan" role="tabpanel" aria-labelledby="contact-tab">

<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Plan Id</th>
      <th scope="col">Tourist Name</th>
      <th scope="col">Status</th>
      <th scope="col">Transaction Id</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Paid Amount</th>
      <th scope="col">Transaction Number</th>
      <th scope="col">Receipt</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($joined_plan as $data)
  
    <tr>
    <th scope="row">{{$data->id}}</th>
      <td>{{$data->plan_id}}</td>
      <td>{{$data->touristnamerelation->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->transaction_id}}</td>
      <td>{{$data->payment_method}}</td>
      <td>{{$data->paid_amount}}</td>
      <td>{{$data->transaction_number}}</td>
      <td>
      @if($data->status=='approved')
      <a class="btn btn-warning" href="{{route('joined.tourist.perplan.receipt',$data->id)}}">Memo</a>
      @endif
      </td>
      

  </tr>
    @endforeach
  </tbody>
</table>
<div>



</div>

  
</div>
</div>
@stop


