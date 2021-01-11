@extends('backend.master')
@section('main')

<h3>Specific User Information</h3>


    <div class="form-group">
        <p>
        <label for="">User Name:</label>{{$user->name}}
        </p>

        <p>
        <label for="">User email:</label> {{$user->email}}
        </p>

        <p>
        <label for="">User n_id:</label> {{$user->n_id}}
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