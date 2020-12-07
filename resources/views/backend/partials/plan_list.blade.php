@extends('backend.master')
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Package Type</th>
      <th scope="col">Description</th>
      <th scope="col">Total no of participants</th>
      <th scope="col">Destination From</th>
      <th scope="col">Destination to</th>
      <th scope="col">Date from</th>
      <th scope="col">Date to</th>
      <th scope="col">Remarks</th>
    </tr>
  </thead>
  <tbody>
  @foreach($list as $data)
  
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->plan_type}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->total_no_of_participants}}</td>
      <td>{{$data->destination_from}}</td>
      <td>{{$data->destination_to}}</td>
      <td>{{$data->date_from}}</td>
      <td>{{$data->date_to}}</td>
      <td>{{$data->remarks}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $list->links()}} 

</div>
@stop