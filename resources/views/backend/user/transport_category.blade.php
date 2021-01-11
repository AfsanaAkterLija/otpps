@extends('backend.master')

@section('main')
    <h1>Add new Transport Category</h1>
    <form action="" method="">
        @csrf
        <div class="form-group">
            <label for="vehicle_type">Transport Category Name</label>
            <input name="vehicle_type" required placeholder="Enter Transport Category Name" type="text" class="form-control" id="vehicle_type" aria-describedby="emailHelp">

        </div>

        <!-- <div class="form-group">
            <label for="price">Description</label>
            <textarea placeholder="Enter Category Description" class="form-control" name="description"></textarea>
        </div> -->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop
