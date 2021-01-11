@extends('backend.master')
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Location Name</th>
      <th scope="col">Opening Time From</th>
      <th scope="col">Opening Time To</th>
      <th scope="col">Weekly Holiday</th>
      <th scope="col">Contact Person Name</th>
      <th scope="col">Contact Person Phone No</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($lists as $data)
  
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->opening_time_from}}</td>
      <td>{{$data->opening_time_to}}</td>
      <td>{{$data->weekly_holiday}}</td>
      <td>{{$data->contact_person_name}}</td>
      <td>{{$data->contact_person_phn_no}}</td>
      
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