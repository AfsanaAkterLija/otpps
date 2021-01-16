@extends('backend.master')
@section('main')

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
     
    </tr>
  </thead>
  <tbody>
  @foreach($list as $data)
  
    <tr>
    <th scope="row">{{$data->id}}</th>
      <td>{{$data->plan_id}}</td>
      <td>{{$data->touristnamerelation->name}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->transaction_id}}</td>
      <td>{{$data->payment_method}}</td>
      <td>{{$data->paid_amount}}</td>
      <td>{{$data->transaction_number}}</td>
      

  </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $list->links()}} 

</div>
@stop