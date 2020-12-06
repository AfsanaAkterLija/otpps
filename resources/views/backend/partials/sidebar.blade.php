<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Planner</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Planners</h6>
                        <a class="collapse-item" href="cards.html">View Planner</a>
                        <a class="collapse-item" href="buttons.html">Add Planner</a>
                        <a class="collapse-item" href="cards.html">Delete Planner</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Co-tourists Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCo-Tourist"
                    aria-expanded="true" aria-controls="collapseCo-Tourist">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Co-tourists</span>
                </a>
                <div id="collapseCo-Tourist" class="collapse" aria-labelledby="headingCo-Tourist"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Co-tourists</h6>
                        <a class="collapse-item" href="Co-tourists-color.html">View List</a>
                        
                    </div>
                </div>
            </li>

<!-- Nav Item - Plan Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePlan"
                    aria-expanded="true" aria-controls="collapsePlan">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Plan</span>
                </a>
                <div id="collapsePlan" class="collapse" aria-labelledby="headingPlan"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Plan</h6>
                        <a class="collapse-item" href="Plan-color.html">Insert Plan</a>
                        <a class="collapse-item" href="Plan-color.html">Plan List</a>
                        <a class="collapse-item" href="Plan-color.html">Feedback</a>
                        
                    </div>
                </div>
            </li>

<!-- Nav Item - Transports Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransports"
                    aria-expanded="true" aria-controls="collapseTransports">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Transports</span>
                </a>
                <div id="collapseTransports" class="collapse" aria-labelledby="headingTransports"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Transports</h6>
                        
                        <a class="collapse-item" href="Transports-color.html">View Transports List</a>
                        
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item -Location Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocation"
                    aria-expanded="true" aria-controls="collapseLocation">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Location</span>
                </a>
                <div id="collapseTLocation" class="collapse" aria-labelledby="headingLocation"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Location</h6>
                        
                        <a class="collapse-item" href="Location-color.html">View Location List</a>
                        
                        
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('form.table')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

             <!-- Nav Item - Form -->
             <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.form')}}">
                    <i class="fas fa-fw fa-form"></i>
                    <span>Form</span></a>
            </li>

            <!-- Nav Item - Report -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.form')}}">
                    <i class="fas fa-fw fa-form"></i>
                    <span>Form</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>