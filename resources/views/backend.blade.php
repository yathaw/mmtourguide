<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> MM Tour Guide </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('logo.png') }}">

    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('summernote/summernote-bs4.css') }}">

    @yield('style')

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">
                    <img src="{{ asset('logo.gif') }}" alt="Logo" class="img-fluid" style="width: 60px; height: 40px; margin-right: 5px;"> 
                    <h6> MM Tour Guide </h6>
                </a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset('logo.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    @hasanyrole('admin')

                    <li>
                        <a href="{{ asset('admin/dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <li class="{{ Request::segment(2) === 'booking' ? 'active' : '' }}">
                        <a href="{{ asset('admin/booking') }}"> 
                            <i class="menu-icon fa fa-paper-plane"></i>
                            Booking Request 
                        </a>
                    </li>

                    @endrole;
                    
                    @hasanyrole('guide')
                    <li>
                        <a href="{{ asset('tourguide/dashboard') }}"> 
                            <i class="menu-icon fa fa-dashboard"></i>
                            Dashboard 
                        </a>
                    </li>

                    @endrole;

                    <h3 class="menu-title"> Main </h3><!-- /.menu-title -->
                    
                    @hasanyrole('admin')

                    <li class="menu-item-has-children dropdown {{ Request::segment(2) === 'guide' ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa fa-group"></i> 
                            Tour Guide 
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href="{{ asset('admin/guide/new') }}"> New </a>
                            </li>

                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href="{{ asset('admin/guide/register') }}"> Register </a>
                            </li>

                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href="{{ asset('admin/guide/reject') }}"> Reject </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown {{ Request::segment(2) === 'tourist' ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa fa-suitcase"></i> 
                            Tourist 
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href=""> New </a>
                            </li>

                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href=""> Register </a>
                            </li>

                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href="forms-advanced.html"> Reject </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown {{ Request::segment(2) === 'place' ? 'active' : '' }} {{ Request::segment(2) === 'division' ? 'active' : '' }} {{ Request::segment(2) === 'region' ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                            <i class="menu-icon fa fa-map-marker"></i> 
                            Place 
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href="{{ asset('admin/division') }}"> Division </a>
                            </li>
                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href="{{ asset('admin/region') }}"> Region </a>
                            </li>
                            <li>
                                <i class="fa fa-long-arrow-right"></i>
                                <a href="{{ asset('admin/place') }}"> Place </a>
                            </li>

                            
                        </ul>
                    </li>

                    <li class="{{ Request::segment(2) === 'language' ? 'active' : '' }}">
                        <a href="{{ asset('admin/language') }}"> 
                            <i class="menu-icon fa fa-flag"></i>
                            Language 
                        </a>
                    </li>

                    <li class="{{ Request::segment(2) === 'country' ? 'active' : '' }}">
                        <a href="{{ asset('admin/country') }}"> 
                            <i class="menu-icon fa fa-globe"></i>
                            Country 
                        </a>
                    </li>

                    @endrole

                    @hasanyrole('guide')

                    <li class="{{ Request::segment(2) === 'calendar' ? 'active' : '' }}">
                        <a href="{{ asset('tourguide/calendar') }}"> 
                            <i class="menu-icon fa fa-calendar"></i>
                            Calendar 
                        </a>
                    </li>

                    <li class="{{ Request::segment(2) === 'booking' ? 'active' : '' }}">
                        <a href="{{ asset('tourguide/booking') }}"> 
                            <i class="menu-icon fa fa-paper-plane"></i>
                            Booking Request 
                        </a>
                    </li>

                    <li class="{{ Request::segment(2) === 'place' ? 'active' : '' }}">
                        <a href="{{ asset('tourguide/place') }}"> 
                            <i class="menu-icon fa fa-map-marker"></i>
                            Place 
                        </a>
                    </li>

                    <li class="{{ Request::segment(2) === 'report' ? 'active' : '' }}">
                        <a href="{{ asset('tourguide/report') }}"> 
                            <i class="menu-icon fa fa-bar-chart"></i>
                            Report 
                        </a>
                    </li>

                    @endrole

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->hasrole('admin'))
                            <img class="user-avatar rounded-circle" src="{{ asset('backend/images/admin.png') }}" alt="User Avatar">
                            @else
                            <span class="mr-3 pt-5"> {{ Auth::user()->name }} </span>

                            <img class="user-avatar rounded-circle" src="{{ Auth::user()->guide->profile }}" alt="User Avatar">
                            @endif
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Logout

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </a>
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        @yield('content')

        


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>


    <script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
    
    <!-- summernote js -->
    <script type="text/javascript" src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>


    <script type="text/javascript">
    
        function readURL(input) 
        {
          if (input.files && input.files[0]) 
          {
            var reader = new FileReader();
              
            reader.onload = function (e) 
            {
              jQuery('.previewImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        };

        jQuery(".newImage").change(function()
        {
            readURL(this);
        });

        jQuery('.summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 100
        });

    </script>
    @yield('script')

</body>

</html>
