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



<div id="home-sec" style="margin: -5% 0%;">

   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
                <span class="head-main" >Tour Planner Platform</span>
                <h3 class="head-last col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3"></h3>
        
                
            </div>
        </div>
    </div>
</div>


<section  id="services-sec">
    <div class="container">
        </div>
                </hr>
            <div class="row go-marg" id="package-section">
                @foreach($packages as $key=>$data)
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                    
                        <div class="panel-body">
                            <h4 class="adjst"> Package {{$key+1}}</h4>
                            <p>
                            <p>{{$data->plan_type}}</p>
                            <p>{{$data->destination_from}}</p>
                            <p>{{$data->destination_to}}</p>
                            <a class="btn btn-success" href="{{route('plan.detail',$data->id)}}">Details</a>
                            </p>
                            
                            
                        </div>
                    </div> 
                            
                </div>
                @endforeach
                            
            </div>
                    
        </div>
    </div>
</section>






@stop