@extends('backend.master')
@section('main')

<h3>Specific Cotourist Information</h3>


    <div class="form-group">
        <p>
        <label for="">Cotourist Name:</label>{{$cotourist->name}}
        </p>

        <p>
        <label for="">Cotourist email:</label> {{$cotourist->email}}
        </p>

        <p>
        <label for="">Cotourist n_id:</label> {{$cotourist->n_id}}
        </p>

        <p>
        <label for="">Cotourist role:</label>{{$cotourist->role}}
        </p>

        <p>
        <label for="">Cotourist status:</label>{{$cotourist->status}}
        </p>

        <p>
        <label for="">Cotourist address:</label>{{$cotourist->address}}
        </p>

<p>
    Lorem Ipsum is simply dummy text of the printing and typesetting <b>{{$cotourist->name}}</b>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
    </div>
@stop