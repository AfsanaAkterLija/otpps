@extends('backend.master')
@section('main')

<h3>Specific User Information</h3>

<div style="display:flex">
    <span style="font-weight:bold">User Image:</span>
    <div>
    <img src="{{asset('/uploads/user/'.$user->image)}}" alt="" style="
    width: 100px;
    height: 100px;
    object-fit: cover;
">
    </div>
    </div>
    
    
    <div class="form-group">
        <p>
        <label for="">User Name:</label>{{$user->name}}
        </p>

        <p>
        <label for="">User email:</label> {{$user->email}}
        </p>

        <p>
        <label for="">User NID:</label> {{$user->n_id}}
        </p>

        <p>
        <label for="">User Phone Number:</label> {{$user->phone_number}}
        </p>

        <p>
        <label for="">User role:</label>{{$user->role}}
        </p>

        <p>
        <label for="">User status:</label>{{$user->status}}
        </p>

        <p>
        <label for="">User address:</label>{{$user->address}}
        </p>

       


    </div>
@stop