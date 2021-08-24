<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
        <meta name="author" content="Inetro Solutions">
        <title>Condominium Management</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/dist/img/favicon.png">
        <!--Global Styles(used by all pages)-->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/typicons/src/typicons.min.css" rel="stylesheet">
        <link href="assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
        <!--Third party Styles(used by this page)--> 
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!--Start Your Custom Style Now-->
        <!--<link rel="stylesheet" href="{{ asset('assets/dist/css/teststyle.css') }}"/>-->
        <link href="assets/dist/css/style.css" rel="stylesheet">
    </head>
    <body class="fixed">
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
                    <a href="index.html" class="logo"><img src="assets/dist/img/logo.png" alt=""></a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                        <img src="assets/dist/img/avatar-1.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                        <h6 class="m-0">Inetro Solutions</h6>
                        <span>inetrosales@gmail.com</span>
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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                        <div class="col-sm-8 header-title p-0">
                            <div class="media">
                                <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
                                <div class="media-body">
                                    <h1 class="font-weight-bold">Dashboard</h1>
                                    <small>From now on you will start your activities.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Content Header (Page header)--> 
                    <div class="body-content">
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <div class="row justify-content-center">
                                            <div class="greet-user col-12 col-xl-10">
                                                <img src="assets/dist/img/happiness.svg" alt="..." class="img-fluid  mb-2">
                                                <h2 class="fs-23 font-weight-600 mb-2">
                                                    Congratulations John,
                                                </h2>
                                                <p class="text-muted">
                                                    You have done 57.6% more sales today. Check your new badge in your profile.
                                                </p>
                                                <a href="#!" class="btn btn-success">
                                                    Try it for free
                                                </a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <!--Revenue today indicator--> 
                                        <div class="p-2 bg-white rounded p-3 mb-3 shadow-sm">
                                            <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">
                                                Revenue today
                                            </div>
                                            <div class="badge badge-success fs-26 text-monospace mx-auto">$98<span class="opacity-50 small">.50</span></div>
                                            <div class="text-muted small mt-1">
                                                <span class="text-danger">
                                                    <i class="fas fa fa-long-arrow-alt-down"></i>
                                                    5% 
                                                </span> vs average
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <!--Feedback--> 
                                        <div class="d-flex position-relative overflow-hidden flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                            <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">Latest Feedback</div>
                                            <i class="fas fa fa-smile opacity-25 fa-5x text-warning decorative-icon"></i>
                                            <div class="d-flex">
                                                <div>
                                                    <img class="d-block rounded-circle" width="32" src="assets/dist/img/avatar-5.jpg">
                                                </div>
                                                <div class="pl-3">
                                                    Nothing bad to say<br/> at this point 😌
                                                    <a class="d-block mt-1 small opacity-75" href="mailto:hermanstarikov@gmail.com">Write back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <!--Balance indicator--> 
                                        <div class="p-2 bg-white rounded p-3 mb-3 shadow-sm">
                                            <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">
                                                Balance
                                            </div>
                                            <div class="text-muted">
                                                <i class="fas fa fa-long-arrow-alt-up text-success"></i>
                                                <span class="text-success text-size-2 text-monospace">
                                                    0.02% 
                                                </span> this month
                                            </div>
                                            <span class="small">Stripe:</span>
                                            <span class="small text-monospace mx-auto">$4,480<span class="opacity-50">.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <!--Time on site indicator--> 
                                        <div class="d-flex flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                            <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">avg time on site</div>
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa fa-clock opacity-25 mr-2 text-size-3"></i>
                                                <span class="text-size-2 text-monospace">10</span>
                                                <span class="text-size-2">m</span>
                                                <span class="text-size-2 text-monospace">30</span>
                                                <span class="text-size-2">s</span>
                                            </div>
                                            <div class="text-muted small">
                                                <span class="text-success text-monospace">
                                                    <i class="fas fa fa-long-arrow-alt-up"></i>
                                                    5% 
                                                </span> vs last week
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <!--Top Referrals--> 
                                        <div class="d-flex flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                            <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">Top Referrals</div>
                                            <div>
                                                <i class="fas fa fa-caret-up text-success"></i>
                                                <span class="mx-1 text-monospace">62%</span>
                                                <!--           <i class="fab fa-xs fa-google"></i>  -->
                                                <a href="#">google</a>
                                            </div>
                                            <div class="opacity-75">
                                                <i class="fas fa fa-caret-down text-danger"></i>
                                                <span class="text-secondary mx-1 text-monospace">25%</span>
                                                <!--           <i class="fab fa-xs fa-y-combinator"></i>  -->
                                                <a href="#" >news.ycombinator</a>
                                            </div>
                                            <div class="opacity-50">
                                                <i class="text-muted">–</i>
                                                <span class="text-secondary mx-1 text-monospace">20%</span>
                                                <!--           <i class="fab fa-xs fa-product-hunt"></i>  -->
                                                <a href="#">producthunt</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <!--Sessions by device-->  
                                        <div class="d-flex flex-column p-3 mb-3 bg-white shadow-sm rounded">
                                            <div class="header-pretitle text-muted fs-11 font-weight-bold text-uppercase mb-2">Sessions by device</div>
                                            <div class="row text-center">
                                                <div class="col">
                                                    <i class="fas fa fa-mobile mb-2 text-size-2"></i>
                                                    <div class="text-monospace">54%</div>
                                                </div>
                                                <div class="col">
                                                    <i class="fas fa fa-tablet opacity-50 mb-2 text-size-2"></i>
                                                    <div class="text-monospace text-secondary">26%</div>
                                                </div>
                                                <div class="col">
                                                    <i class="fas fa fa-laptop opacity-25 mb-2 text-size-2"></i>
                                                    <div class="text-monospace text-secondary">20%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-3 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Pie Chart</h6>
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
                                    <div class="card-body">
                                        <div class="chart mb-3">
                                            <canvas id="doughutChart" height="310"></canvas>
                                        </div>
                                        <div class="chart-legend">
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color kelly-green"></div>
                                                <p>From Google</p>
                                                <p class="percentage text-muted">63.259 %</p>
                                            </div>
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color kelly-green2"></div>
                                                <p>Your Website</p>
                                                <p class="percentage text-muted">25.321 %</p>
                                            </div>
                                            <div class="chart-legend-item">
                                                <div class="chart-legend-color whisper"></div>
                                                <p>Others</p>
                                                <p class="percentage text-muted">11.42 %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-9">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h2 class="fs-18 font-weight-bold mb-0">Bar chart</h2>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart" height="128"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fs-17 font-weight-600 mb-0">Recent Orders</h6>
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
                                    <div class="card-body">
                                        <div class=table-responsive>
                                            <!--<table class="table table-sm table-nowrap card-table">-->
                                            <table class="table display table-bordered table-striped table-hover bg-white m-0 card-table">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Street Address</th>
                                                        <th>% Share</th>
                                                        <th>City</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/dist/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/dist/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/dist/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/dist/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Naeem Khan</td>
                                                        <td>123 456 7890</td>
                                                        <td>294-318 Duis Ave</td>
                                                        <td>
                                                            <div class="sparkline1"></div>
                                                        </td>
                                                        <td>Noakhali</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/dist/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/dist/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Tuhin Sarkar</td>
                                                        <td>123 456 7890</td>
                                                        <td>680-1097 Mi Rd.</td>
                                                        <td>
                                                            <div class="sparkline2"></div>
                                                        </td>
                                                        <td>Lavoir</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/dist/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/dist/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/dist/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Tanjil Ahmed</td>
                                                        <td>456 789 1230</td>
                                                        <td>Ap #289-8161 In Avenue</td>
                                                        <td>
                                                            <div class="sparkline3"></div>
                                                        </td>
                                                        <td>Dhaka</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/dist/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/dist/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/dist/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Sourav</td>
                                                        <td>789 123 4560</td>
                                                        <td>226-4861 Augue. St.</td>
                                                        <td>
                                                            <div class="sparkline4"></div>
                                                        </td>
                                                        <td>Rongpur</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/dist/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/dist/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                                    <img src="assets/dist/img/avatar-3.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/dist/img/avatar-4.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Jahangir Alam</td>
                                                        <td>(01662) 59083</td>
                                                        <td>3219 Elit Avenue</td>
                                                        <td>
                                                            <div class="sparkline5"></div>
                                                        </td>
                                                        <td>Chittagong</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-group">
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Melissa Ayre">
                                                                    <img src="assets/dist/img/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Karen Robinson">
                                                                    <img src="assets/dist/img/avatar-2.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                                <a href="user_profile.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                                    <img src="assets/dist/img/avatar-5.jpg" class="avatar-img rounded-circle" alt="...">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>Brielle Williamson</td>
                                                        <td>123 456 7890</td>
                                                        <td>Dhaka-1229, Bangladesh</td>
                                                        <td>
                                                            <div class="sparkline6"></div>
                                                        </td>
                                                        <td>Barisal</td>
                                                        <td>
                                                            <a href="#" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i></a>
                                                            <a href="#" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
        <script src="assets/plugins/jQuery/jquery-3.4.1.min.js"></script>
        <script src="assets/dist/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <!-- Third Party Scripts(used by this page)-->
        <script src="assets/plugins/chartJs/Chart.min.js"></script>
        <script src="assets/plugins/sparkline/sparkline.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!--Page Active Scripts(used by this page)-->
        <script src="assets/dist/js/pages/dashboard.js"></script>
        <!--Page Scripts(used by all page)-->
        <script src="assets/dist/js/sidebar.js"></script>

        

    </body>
</html>