<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">-->
        <meta name="author" content="Inetro Solutions">
        <title>Condominium Management @yield("title")</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/dist/img/favicon.png') }}">
        
        <!--Global Styles(used by all pages)-->
        <!--<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
        <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        
        
        <link href="{{ URL::asset('assets/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/typicons/src/typicons.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/themify-icons/themify-icons.min.css') }}" rel="stylesheet">
         <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
         <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/demo.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-default.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-growl.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-attached.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-bar.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-other.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/toastr/toastr.css') }}" rel="stylesheet">
        
        <link href="{{ URL::asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/select2-bootstrap4/dist/select2-bootstrap4.min.css') }}" rel="stylesheet">

        <link href="{{ URL::asset('assets/plugins/jquery.sumoselect/sumoselect.min.css') }}" rel="stylesheet">
        
        <link href="{{ URL::asset('assets/dist/css/select.css') }}" rel="stylesheet" type="text/css"/>
        
       
       <link href="{{ URL::asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.css') }}" rel="stylesheet">


        <!--Start Your Custom Style Now-->
        <link href="{{ URL::asset('assets/dist/css/style.css') }}" rel="stylesheet">
       <!--<link rel="stylesheet" href="{{ asset('assets/dist/css/style.css') }}"/>-->
       
       <link href="{{ URL::asset('assets/plugins/modals/component.css') }} " rel="stylesheet">

        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/demo.css') }}" rel="   stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-default.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-growl.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-attached.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-bar.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/NotificationStyles/css/ns-style-other.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
        
       <link href="{{ URL::asset('assets/plugins/toastr/toastr.css') }}" rel="stylesheet">
        
        
    </head>
    

    <body class="fixed" >
        @section('body')
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav class="sidebar sidebar-bunker">
                <div class="sidebar-header">
                    <!--<a href="index.html" class="logo"><span>bd</span>task</a>-->
                    
                    <a href="index.html" class="logo"><img src="{{ URL::asset('assets/dist/img/logo.png') }}" alt=""></a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                        <img src="{{ URL::asset('assets/dist/img/avatar-1.jpg') }}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                        <h6 class="m-0">Inetro Solutions</h6>
                        <span>inetro@gmail.com</span>
                    </div>
                </div><!--/.profile element-->
                <form class="search sidebar-form" action="#" method="get" >
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search...">
                        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
                    </div>
                </form><!--/.search-->
                <div class="sidebar-body">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">
                            <li class="nav-label">Condominium Management</li>
                            <li class="mm-active">
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-home-outline mr-2"></i>
                                    Master Files
                                </a>
                                <ul class="nav-second-level">
                                    <li class="mm-active"><a href={{ url('Company') }}>Company Details</a></li>
                                    <li><a href={{ url('Complex') }}>Complex Details</a></li>
                                    <li><a href={{ url('Tower') }}>Tower Details</a></li>
                                    <li><a href={{ url('BillGroup') }}>Bill Group Details</a></li>
                                    <li><a href={{ url('ProcessType') }}>Process Type Details</a></li>
                                    <li><a href={{ url('TaxType') }}>Taxes</a></li>
                                    <li><a href={{ url('Charge') }}>Charges</a></li>
                                    <li><a href={{ url('Apartment') }}>Apartment Details</a></li>
                                    <li><a href={{ url('Client') }}>Client Details</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-chart-pie-outline mr-2"></i>
                                    Transaction Files
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href={{ url('UploadMeterReadings') }}>Upload Meter Readings</a></li>
                                    <li><a href="charts_Js.html">Process Bills</a></li>
                                    <li><a href="charts_morris.html">Process Partial Bills</a></li>
                                    <li><a href="charts_sparkline.html">Process Late Payment Bills</a></li>
                                    <li><a href="charts_am.html">Receipt</a></li>
                                    <li><a href="charts_apex.html">Settlements</a></li>
                                    <li><a href="charts_apex.html">Special Notices</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-mail mr-2"></i>
                                    Reports
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="mailbox.html">Invoice Details</a></li>
                                    <li><a href="mailbox_details.html">Receipt Details</a></li>
                                    <li><a href="compose.html">Settlement Details</a></li>
                                    <li><a href="compose.html">Revenue Details</a></li>
                                    <li><a href="compose.html">Oustanding Details With Aging</a></li>
                                    <li><a href="compose.html">Complains and Suggestion Details</a></li>
                                    <li><a href="compose.html">Transaction Details</a></li>
                                </ul>
                            </li>
                            
                            
                            <li class="nav-label">Clients Portal</li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-coffee mr-2"></i>
                                    Client Management
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="ui_buttons.html">DashBoard</a></li>
                                    <li><a href="ui_badges.html">Complains and Suggestions</a></li>
                                    <li><a href="ui_spinners.html">Online Payments</a></li>
                                    <li><a href="ui_tabs.html">Outstanding Details</a></li>
                                    <li><a href="ui_notification.html">Unit Comparison Details</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li class="nav-label">Administrative Tasks</li>
                            <li>
                                <a class="has-arrow material-ripple" href="#">
                                    <i class="typcn typcn-device-tablet mr-2"></i>
                                    Configurations
                                </a>
                                <ul class="nav-second-level">
                                    <li><a href="invoice.html">Configurations and Settings</a></li>
                                    
                                </ul>
                            </li>
                            
                           
                            
                        </ul>
                    </nav>
                </div><!-- sidebar-body -->
            </nav>
            </nav>
            <!-- Page Content  -->
            <div class="content-wrapper">
                <div class="main-content">
                    <nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                        <div class="sidebar-toggle-icon" id="sidebarCollapse">
                            sidebar toggle<span></span>
                        </div><!--/.sidebar toggle icon-->
                        <div class="d-flex flex-grow-1">
                            <ul class="navbar-nav flex-row align-items-center ml-auto">
                                <li class="nav-item dropdown quick-actions">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <i class="typcn typcn-th-large-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="nav-grid-row row">
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-cog-outline d-block"></i>
                                                <span>Settings</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-group-outline d-block"></i>
                                                <span>Users</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-puzzle-outline d-block"></i>
                                                <span>Components</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-chart-bar-outline d-block"></i>
                                                <span>Profits</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-time d-block"></i>
                                                <span>New Event</span>
                                            </a>
                                            <a href="#" class="icon-menu-item col-4">
                                                <i class="typcn typcn-edit d-block"></i>
                                                <span>Tasks</span>
                                            </a>
                                        </div>
                                    </div>
                                </li><!--/.dropdown-->
                                <li class="nav-item">
                                    <a class="nav-link" href="chat.html"><i class="typcn typcn-messages"></i></a>
                                </li>
                                <li class="nav-item dropdown notification">
                                    <a class="nav-link dropdown-toggle badge-dot" href="#" data-toggle="dropdown">
                                        <i class="typcn typcn-bell"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <h6 class="notification-title">Notifications</h6>
                                        <p class="notification-text">You have 2 unread notification</p>
                                        <div class="notification-list">
                                            <div class="media new">
                                                <div class="img-user"><img src="assets/dist/img/avatar.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</h6>
                                                    <span>Mar 15 12:32pm</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media new">
                                                <div class="img-user online"><img src="assets/dist/img/avatar2.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Joyce Chua</strong> just created a new blog post</h6>
                                                    <span>Mar 13 04:16am</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media">
                                                <div class="img-user"><img src="assets/dist/img/avatar3.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Althea Cabardo</strong> just created a new blog post</h6>
                                                    <span>Mar 13 02:56am</span>
                                                </div>
                                            </div><!--/.media -->
                                            <div class="media">
                                                <div class="img-user"><img src="assets/dist/img/avatar4.png" alt=""></div>
                                                <div class="media-body">
                                                    <h6><strong>Adrian Monino</strong> added new comment on your photo</h6>
                                                    <span>Mar 12 10:40pm</span>
                                                </div>
                                            </div><!--/.media -->
                                        </div><!--/.notification -->
                                        <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                                    </div><!--/.dropdown-menu -->
                                </li><!--/.dropdown-->
                                <li class="nav-item dropdown user-menu">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                        <!--<img src="assets/dist/img/user2-160x160.png" alt="">-->
                                        <i class="typcn typcn-user-add-outline"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <div class="dropdown-header d-sm-none">
                                            <a href="" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                        </div>
                                        <div class="user-header">
                                            <div class="img-user">
                                                <img src="assets/dist/img/avatar-1.jpg" alt="">
                                            </div><!-- img-user -->
                                            <h6>Naeem Khan</h6>
                                            <span>example@gmail.com</span>
                                        </div><!-- user-header -->
                                        <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                                        <a href="" class="dropdown-item"><i class="typcn typcn-arrow-shuffle"></i> Activity Logs</a>
                                        <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                                        <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-key-outline"></i> Sign Out</a>
                                    </div><!--/.dropdown-menu -->
                                </li>
                            </ul><!--/.navbar nav-->
                            <div class="nav-clock">
                                <div class="time">
                                    <span class="time-hours"></span>
                                    <span class="time-min"></span>
                                    <span class="time-sec"></span>
                                </div>
                            </div><!-- nav-clock -->
                        </div>
                    </nav><!--/.navbar-->
                    <!--Content Header (Page header)-->
                    <div class="content-header row align-items-center m-0">
                        <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                            <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Select</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-puzzle-outline"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Condominium Management</h1>
                                    <small>From now on you will start your activities.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                   
                    <div class="body-content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="fs-17 font-weight-600 mb-0">@yield("title")</h6>
                                    </div>
                                    <div class="text-right">
                                        <div class="actions">
                                            <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                            <div class="dropdown action-item" data-toggle="dropdown">
                                                <a href="#" class="action-item"><i class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item">Refresh</a>
                                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                                    <a href="#" class="dropdown-item">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @yield('body')
                            <div class="card-body">
                            </div>
                        </div>
                    </div><!--/.body content-->
                </div><!--/.main content-->
                <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy">© 2021 all right reserved to Inetro Solutions</div>
                        <div class="credit">Designed by: <a href="#">Inetro Solutions</a></div>
                    </div>
                </footer><!--/.footer content-->
                <div class="overlay"></div>
            </div><!--/.wrapper-->
        </div>
        <!--Global script(used by all pages)-->
        <script src="{{ URL::asset('assets/plugins/jQuery/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ URL::asset('assets/dist/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>

        <!-- Third Party Scripts(used by this page)-->
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/sparkline/sparkline.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery.sumoselect/jquery.sumoselect.min.js') }}"></script>

         <script src="{{ URL::asset('assets/plugins/jQuery-mask-plugin/jquery.mask.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jQuery-mask-plugin/examples.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        
      

        <!--Notifications-->
        <script src="{{ URL::asset('assets/plugins/NotificationStyles/js/modernizr.custom.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/NotificationStyles/js/classie.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/NotificationStyles/js/notificationFx.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/NotificationStyles/js/snap.svg-min.js') }}"></script>
       

        <!--Page Active Scripts(used by this page)-->
        <script src="{{ URL::asset('assets/plugins/datatables/data-basic.active.js') }}"></script>
        <script src="{{ URL::asset('assets/dist/js/pages/bootstrap-table.active.js') }}"></script>
        <script src="{{ URL::asset('assets/dist/js/pages/demo.select2.js') }}"></script>
        <script src="{{ URL::asset('assets/dist/js/pages/demo.jquery.sumoselect.js') }}"></script>
        <script src="{{ URL::asset('assets/dist/js/pages/newsletter.active.js') }}"></script>   
        
        <script src="{{ URL::asset('assets/plugins/toastr/toastr.min.js') }}"></script>
        

        <!--Page Scripts(used by all page)-->
        <script src="{{ URL::asset('assets/dist/js/sidebar.js') }}"></script>

       
    
        

    </body>


</html>