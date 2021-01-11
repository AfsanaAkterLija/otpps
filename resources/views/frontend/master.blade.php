<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Online Tour Planner Platform System </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{asset('/frontend/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="{{asset('/frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="{{asset('/frontend/assets/css/font-awesome-animation.css')}}" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="{{asset('/frontend/assets/css/prettyPhoto.css')}}" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="{{asset('/frontend/assets/css/style.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
<body>
     <!-- NAV SECTION -->
     @include('frontend.partials.navbar')
     <!--END NAV SECTION -->


    <!--HOME SECTION-->
     @yield('main')
    <!--END HOME SECTION-->
  
    

   

    <!--FOOTER SECTION -->
      @include('frontend.partials.footer')
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{asset('/frontend/assets/plugins/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="{{asset('/frontend/assets/plugins/bootstrap.min.js')}}"></script>  
     <!-- ISOTOPE SCRIPT   -->
    <script src="{{asset('/frontend/assets/plugins/jquery.isotope.min.js')}}"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="{{asset('/frontend/assets/plugins/jquery.prettyPhoto.js')}}"></script>    
    <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('/frontend/assets/js/custom.js')}}"></script>

</body>
</html>
