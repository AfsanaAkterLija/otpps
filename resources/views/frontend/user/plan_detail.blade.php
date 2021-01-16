@extends('frontend.master')
@section('main')

<h3>Package Details</h3>


    <div class="form-group">
        <p>
        <label for="">Package Type:</label>{{$plandetail->plan_type}}
        </p>

        <p>
        <label for="">Tour Planner Name:</label> {{$plandetail->touristnamerelation->name}}
        </p>

        <p>
        <label for="">Location Name:</label> {{$plandetail->locationnamerelation->name}}
        </p>

        <p>
        <label for="">Transport Type:</label>{{$plandetail->transportnamerelation->vehicle_type}}
        </p>

        <p>
        <label for="">Total no. of Participants:</label>{{$plandetail->total_no_of_participants}}
        </p>

        <p>
        <label for="">No. of Joined Participants:</label>{{$planCount}}
        </p>
        

        <p>
        <label for="">Destination From:</label>{{$plandetail->destination_from}}
        </p>

        <p>
        <label for="">Destination To:</label>{{$plandetail->destination_to}}
        </p>

        <p>
        <label for="">Date From:</label>{{$plandetail->date_from}}
        </p>

        <p>
        <label for="">Date To:</label>{{$plandetail->date_to}}
        </p>

        <p>
        <label for="">Remarks:</label>{{$plandetail->remarks}}
        </p>

        <p>
        <label for="">Token Money:</label>{{$plandetail->token_money}}
        </p>

        <p>
        <label for="">Approximate Budget:</label>{{$plandetail->approximate_budget}}
        </p>

        <p>
        <label for="">Payment System:</label>{{$plandetail->transaction_number}}
        </p>

        <p> 
        <a class="btn btn-success" href="{{route('plan.payment',$plandetail->id)}}">+Join</a>
        </p>

    </div>
@stop