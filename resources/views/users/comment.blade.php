<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skulyv</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('css/table.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="{{asset('css/news.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">skulyv</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
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
                <span>Library</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">All Materials</h6>

                    <a class="collapse-item" href="{{route('library.index')}}">My Library</a>

                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
               aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Assignments</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Recent Assignments</h6>
                    @foreach($assignments as $assignment)
                        {{--@for($assignment = 0; $assignment<=4; $assignment++)--}}
                        <a class="collapse-item" href="{{route('download' , $assignment->id)}}">{{$assignment->file_path}}</a>
                        {{--@endfor--}}
                    @endforeach
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
                <span>Peronal Records</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Results</h6>
                    <a class="collapse-item" href="{{route('result.show', $result->id)}}">All Results</a>
                    {{--<a class="collapse-item" href="register.html">Register</a>--}}
                    {{--<a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Medical</h6>
                    <a class="collapse-item" href="{{route('medical.index')}}">Medical Profile</a>
                    <a class="collapse-item" href="blank.html">Medical Update</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('news.index')}}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>News</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-table"></i>
                <span>FAQS</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b><span class="mr-2 d-none d-lg-inline text-gray-600">{{ucfirst(Auth::user()->last_name) .' '.ucfirst(Auth::user()->first_name)}}</span></b>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{route('profile.show', $profile)}}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    {{--<h1 class="h5 mb-0 text-gray-800">Results</h1>--}}

                </div>

                <!-- Content Row -->
                <div class="row">

















































                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <title>Bootstrap Example</title>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                        <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                        <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <style>
                            /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
                            .row.content {height: 1500px}

                            /* Set gray background color and 100% height */
                            .sidenav {
                                background-color: #f1f1f1;
                                height: 100%;
                            }

                            /* Set black background color, white text and some padding */
                            footer {
                                background-color: #555;
                                color: white;
                                padding: 15px;
                            }

                            /* On small screens, set height to 'auto' for sidenav and grid */
                            @media screen and (max-width: 767px) {
                                .sidenav {
                                    height: auto;
                                    padding: 15px;
                                }
                                .row.content {height: auto;}
                            }
                        </style>
                    </head>
                    <body>

                    <div class="container-fluid">
                        <div class="row content">
                            {{--<div class="col-sm-3 sidenav">--}}
                            {{--<h4>John's Blog</h4>--}}
                            {{--<ul class="nav nav-pills nav-stacked">--}}
                            {{--<li class="active"><a href="#section1">Home</a></li>--}}
                            {{--<li><a href="#section2">Friends</a></li>--}}
                            {{--<li><a href="#section3">Family</a></li>--}}
                            {{--<li><a href="#section3">Photos</a></li>--}}
                            {{--</ul><br>--}}
                            {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" placeholder="Search Blog..">--}}
                            {{--<span class="input-group-btn">--}}
                            {{--<button class="btn btn-default" type="button">--}}
                            {{--<span class="glyphicon glyphicon-search"></span>--}}
                            {{--</button>--}}
                            {{--</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <div class="col-sm-9">
                                <h4><small>RECENT POSTS</small></h4>
                                <hr>
                                <h2>I Love Food</h2>
                                <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
                                <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
                                <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <br><br>

                                <h4><small>RECENT POSTS</small></h4>
                                <hr>
                                <h2>Officially Blogging</h2>
                                <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
                                <h5><span class="label label-success">Lorem</span></h5><br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <hr>

                                <h4>Leave a Comment:</h4>
                                <form role="form">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                                <br><br>

                                <p><span class="badge">2</span> Comments:</p><br>

                                <div class="row">
                                    <div class="col-sm-2 text-center">
                                        <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
                                        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <br>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                                    </div>
                                    <div class="col-sm-10">
                                        <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
                                        <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <br>
                                        <p><span class="badge">1</span> Comment:</p><br>
                                        <div class="row">
                                            <div class="col-sm-2 text-center">
                                                <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                                            </div>
                                            <div class="col-xs-10">
                                                <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
                                                <p>Me too! WOW!</p>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="container-fluid">
                        <p>Footer Text</p>
                    </footer>

                    </body>

                    <!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_blog&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 23:25:42 GMT -->
                    </html>


















                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/home.js')}}"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            // JS only for the switch
            $(function(){
                $("#switch-view").click(function(){
                    $(this).find("button").toggleClass("active");
                    $(".article-wrapper").toggleClass("bloc col-xs-12 col-xs-4");
                });
            });
        </script>

</body>

</html>