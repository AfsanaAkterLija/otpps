@extends('backend.master')
@section('main')

<h3>Plan Information</h3>


    <div class="form-group">
        <p>
        <label for="">Package Type:</label>{{$viewapprovedplan->plan_type}}
        </p>
        <p>
        <label for="">Planner Name:</label> {{$viewapprovedplan->touristnamerelation->name}}
        </p>

        <p>
        <label for="">Location Name:</label> {{$viewapprovedplan->locationnamerelation->name}}
        </p>

        <p>

        
        <label for="">Transport Type:</label>{{optional($viewapprovedplan->transportnamerelation)->vehicle_type}}
        </p>

        <p>
        <label for="">Total no of participants:</label>{{$viewapprovedplan->total_no_of_participants}}
        </p>

        <p>
        <label for="">Destination From:</label>{{$viewapprovedplan->destination_from}}
        </p>
        <p>
        <label for="">Destination To:</label>{{$viewapprovedplan->destination_to}}
        </p>
        <p>
        <label for="">Date from:</label>{{$viewapprovedplan->date_from}}
        </p>
        <p>
        <label for="">Date to:</label>{{$viewapprovedplan->date_to}}
        </p>
        <p>
        <label for="">Remarks:</label>{{$viewapprovedplan->remarks}}
        </p>
        <p>
        <label for="">Token Money:</label>{{$viewapprovedplan->token_money}}
        </p>
        <p>
        <label for="">Approximate Budget:</label>{{$viewapprovedplan->approximate_budget}}
        </p>
        <p>
        <label for="">Transaction Number:</label>{{$viewapprovedplan->transaction_number}}
        </p>
       


    </div>
@stop