

<div class="navbar navbar-inverse navbar-fixed-top">
       
       <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">YOUR LOGO</a>
           </div>
           <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                   <a class="btn btn-success" href="{{route('home')}}">Home</a>
                   <a class=" btn btn-success " href="#package-section"> Package </a>
                   <!-- <button type="button" href="#package-section" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Packages
                        </button> -->
                    <a class="btn btn-success" href="Gallery.html">Gallery</a>
                
                    
                    @guest
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                        Sign In/Sign up
                        </button>
                    @endguest


                    @auth
                        
                        <a class="btn btn-success" href="{{route('plan.insertplan')}}">Add a Package</a>
                        
                        <a class="btn btn-success" href="{{route('user.profile')}}">My Profile</a>

                        <a class="btn btn-success" href="{{route('user.logout')}}">Signout</a>                   
                    @endauth


                   <!-- <li><a href="Contact.html">Contact</a></li>
                   <li><a href="{{route('dashboard.form')}}">Sign Up</a></li>
                   <li> -->
              <!-- <div class="dropdown  mt-2">
                    <button style="margin-top: 8px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-block" style="display: block; width: 100%; padding: 0px 10px;" href="#">Admin</a>
                        <a class="dropdown-item d-block" style="display: block; width: 100%; padding: 0px 10px;" href="#">Another action</a>
                        <a class="dropdown-item d-block" style="display: block; width: 100%; padding: 0px 10px;" href="#">Something else here</a>
                    </div>
                </div> -->

            
                   
                   </li>
               </ul>

               <!-- <form class="form-inline my-2 my-lg-0"> -->

<!-- @guest -->
    
<!-- @endguest -->

<!-- @auth
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Logout
</button>

    @endauth -->
<!-- </form> -->

           </div>
          
       </div>
   </div>

   <!-- Modal -->

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login/Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">Sign Up</a>
                    </li>

                </ul>

    
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <form method="post" action="{{route('user.login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password"
                                       required>
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-success">Sign in</button>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form method="post" action="{{route('user.registration')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input name="phone_number" type="phone_number" class="form-control" id="phone_number" placeholder="phone_number">
                            </div>

                            <div class="form-group">
                                <label for="n_id">N ID</label>
                                <input name="n_id" type="n_id" class="form-control" id="n_id" placeholder="n_id">
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input name="status" type="text" class="form-control" id="status" placeholder="status">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" id="address" placeholder="address">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <input name="gender" type="text" class="form-control" id="gender" placeholder="Enter gender" required>
                            </div>


                            <div class="form-group">
                                <label for="file">Upload User Image:</label>
                                <input name="image" type="file" class="form-control" id="file" >
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>