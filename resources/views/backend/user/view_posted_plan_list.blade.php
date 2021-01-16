@extends('backend.master')
@section('main')

<h3>Plan Information</h3>


    <div class="form-group">
        <p>
        <label for="">Package Type:</label>{{$viewpostedplan->plan_type}}
        </p>

        <p>
        <label for="">Planner Name:</label> {{$viewpostedplan->touristnamerelation->name}}
        </p>

        <p>
        <label for="">Location Name:</label> {{$viewpostedplan->locationnamerelation->name}}
        </p>

        <p>
        <label for="">Transport Type:</label>{{$viewpostedplan->transportnamerelation->vehicle_type}}
        </p>

        <p>
        <label for="">Total no of participants:</label>{{$viewpostedplan->total_no_of_participants}}
        </p>

        <p>
        <label for="">Destination From:</label>{{$viewpostedplan->destination_from}}
        </p>
        <p>
        <label for="">Destination To:</label>{{$viewpostedplan->destination_to}}
        </p>
        <p>
        <label for="">Date from:</label>{{$viewpostedplan->date_from}}
        </p>
        <p>
        <label for="">Date to:</label>{{$viewpostedplan->date_to}}
        </p>
        <p>
        <label for="">Remarks:</label>{{$viewpostedplan->remarks}}
        </p>
        <p>
        <label for="">Token Money:</label>{{$viewpostedplan->token_money}}
        </p>
        <p>
        <label for="">Approximate Budget:</label>{{$viewpostedplan->approximate_budget}}
        </p>
        <p>
        <label for="">Transaction Number:</label>{{$viewpostedplan->transaction_number}}
        </p>
       


    </div>
@stop