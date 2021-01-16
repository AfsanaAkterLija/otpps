@extends('frontend.master')
@section('main')

<h3>Memo</h3>


    <div class="form-group">
        <p>
        <label for="">Tourist Name:</label>{{$user->name}}
        </p>

        <p>
        <label for="">Tourist email:</label> {{$user->email}}
        </p>

        <p>
        <label for="">Tourist NID:</label> {{$user->n_id}}
        </p>

        <p>
        <label for="">Location:</label>{{$paymentinfo->plan->locationnamerelation->name}}
        </p>

        <p>
        <label for="">Transport Type:</label>{{$paymentinfo->plan->transportnamerelation->vehicle_type}}
        </p>


        <p>
        <label for="">Destination From:</label>{{$paymentinfo->plan->destination_from}}
        </p>

        <p>
        <label for="">Destination To:</label>{{$paymentinfo->plan->destination_to}}
        </p>
        <p>
        <label for="">Date From:</label>{{$paymentinfo->plan->date_from}}
        </p>
        <p>
        <label for="">Date To:</label>{{$paymentinfo->plan->date_to}}
        </p>
        <p>
        <label for="">Payment Status:</label>{{$paymentinfo->status}}
        </p>
        <p>
        <label for="">Payment Method:</label>{{$paymentinfo->payment_method}}
        </p>
        <p>
        <label for="">Payment Amount:</label>{{$paymentinfo->paid_amount}}
        </p>
        <p>
        <label for="">Transaction ID:</label>{{$paymentinfo->transaction_id}}
        </p>
        <p>
        <label for="">Transaction Number:</label>{{$paymentinfo->transaction_no}}
        </p>

        <button type="print" onclick="window.print()" class="btn btn-success btn-lg btn-block">

        print

        </button>


    </div>
@stop