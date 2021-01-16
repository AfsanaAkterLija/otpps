@extends('frontend.master')
@section('main')

<h1>Give Feedback</h1>
    <form action="{{route('user.feedback.submit')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea name="feedback" required placeholder="Enter Feedback" type="text" class="form-control" id="feedback" aria-describedby="emailHelp"></textarea>

        </div>

        <!-- <div class="form-group">
            <label for="price">Description</label>
            <textarea placeholder="Enter Category Description" class="form-control" name="description"></textarea>
        </div> -->

        <button type="submit" style=
        'background-color:bule; color:white;' class="btn btn-primary">Submit</button>
    </form>



@stop