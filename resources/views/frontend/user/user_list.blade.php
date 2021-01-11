@extends('backend.master')
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($list as $data)
  
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      
      <td>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="{{route('user.delete',$data->id)}}">Delete</a>
                    <a class="btn btn-info" href="{{route('user.view',$data->id)}}">View</a>
                </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>

 {{ $list->links()}}

</div>
@stop