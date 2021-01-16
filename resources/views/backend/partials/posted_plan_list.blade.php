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
      <td>{{optional($data->transportnamerelation)->vehicle_type}}</td>
      

      <td>
        <a class="btn btn-danger" href="{{route('posted.plan.delete',$data->id)}}">Delete</a>
        <a class="btn btn-info" href="{{route('posted.plan.view',$data->id)}}">View</a>
        <a class="btn btn-info" href="{{route('plan.approved',$data->id)}}">{{$data->is_approved}}</a>
      </td>

  </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $list->links()}} 

</div>
@stop