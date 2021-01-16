@extends('backend.master')
@section('main')

@if(session()->has('msg'))
    <p class="alert alert-success" style="margin: 5% 0%;">{{session()->get('msg')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

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
        <a class="btn btn-warning" href="{{route('transport.edit',$data->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('transport.delete',$data->id)}}">Delete</a>
      </td>
      

  </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $lists->links()}} 

</div>
@stop