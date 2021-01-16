@extends('frontend.master')
@section('main')

@if(session()->has('msg'))
    <p class="alert alert-success" style="margin: 5% 0%;">{{session()->get('msg')}}</p>
@endif

@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif

<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
          <div style="padding-top:60px">
          <div class="table-responsive table--no-card m-b-30">
            <h1>Package Joining Registration Form</h1>

              @if(session()->has('msg'))
               <p class= "alert alert-success">{{session()->get('msg')}}</p>
             @endif
           
            <form method="post" action="{{route('plan.payment.submit',$plandetail->id)}}">

            @csrf
              
              <div class="form-group">
                <label for="transaction_id">Transaction Id</label>
                <input name="transaction_id" type="transaction_id" class="form-control" id="transaction_id" aria-describedby="emailHelp" placeholder="Enter Transaction Id">
                @error('transaction_id') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <!-- <div class="form-group">
                <label for="payment_method">Payment Method</label>
                <input name="payment_method" type="payment_method" class="form-control" id="payment_method" placeholder="Payment Method">
              </div> -->

              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label for="payment_method" class="input-group-text" for="inputGroupSelect01">Payment Method</label>
                  </div>
                  <select name="payment_method" type="payment_method"  class="custom-select" id="payment_method">
                    <option selected>Choose..</option>
                    <option selected>Bkash</option>
                    <option value="1">Nogod</option>
                    <option value="2">Rocket</option>
                  </select>
               </div>


              <div class="form-group">
                <label for="paid_amount">Paid Amount</label>
                <input disabled value="{{$plandetail->token_money}}" name="paid_amount" type="number" class="form-control" id="n_id" placeholder="Paid Amount">
              </div>

              <div class="form-group">
                <label for="transaction_number">Transaction Number</label>
                <input name="transaction_number" type="number" class="form-control" id="transaction_number" placeholder="Enter transaction number">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

          </div>
            
         </div>
      </div>    
   </div> 
  </div>
@stop    