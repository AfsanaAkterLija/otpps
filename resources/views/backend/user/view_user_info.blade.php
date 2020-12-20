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

<p>
    Lorem Ipsum is simply dummy text of the printing and typesetting <b>{{$user->name}}</b>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
    </div>
@stop