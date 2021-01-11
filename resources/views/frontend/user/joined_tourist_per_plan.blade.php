@extends('frontend.master')
@section('main')
<div style="padding-top:60px">
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
      <th scope="col">Action</th>
      <th scope="col">Receipt</th>
     
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
      

      <td>
      
      @if($data->status=='pending')
      <a class="btn btn-warning" href="{{route('tourist.list.approve',$data->id)}}">Pending</a>
      @else
      
      <a class="btn btn-success" href="">Approved</a>
      @endif
      </td>
      <td>{{$data->receipt}}</td>
      

  </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $list->links()}} 

</div>
</div>
@stop