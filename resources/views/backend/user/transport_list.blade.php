@extends('backend.master')
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Class</th>
      <th scope="col">Company</th>
      <th scope="col">Status</th>
      <th scope="col">Total no of Seat</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($lists as $data)
  
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->vehicle_type}}</td>
      <td>{{$data->class}}</td>
      <td>{{$data->company}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->total_no_of_seat}}</td>

      <td>
        <a class="btn btn-warning" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
        <a class="btn btn-info" href="">View</a>
      </td>
      

  </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $lists->links()}} 

</div>
@stop