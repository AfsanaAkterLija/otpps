@extends('backend.master')
@section('main')

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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($list as $data)
  
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

      <td>
          
      <a class="btn btn-warning" href="{{route('tourist.list.per.plan')}}">Tourists List</a>
      </td>
      

  </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $list->links()}} 

</div>
@stop