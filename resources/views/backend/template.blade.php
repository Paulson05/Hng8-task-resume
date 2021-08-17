
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 20:19:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('backend.partials.header')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-5.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="https://www.creative-tim.com/" class="simple-text logo-mini">
                    Ct
                </a>
                <a href="https://www.creative-tim.com/" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="user">
                <div class="photo">
                    <img src="../assets/img/default-avatar.png" />
                </div>
                <div class="info ">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>Tania Andrew
                                <b class="caret"></b>
                            </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a class="profile-dropdown" href="#pablo">
                                    <span class="sidebar-mini">MP</span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="profile-dropdown" href="#pablo">
                                    <span class="sidebar-mini">EP</span>
                                    <span class="sidebar-normal">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="profile-dropdown" href="#pablo">
                                    <span class="sidebar-mini">S</span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="dashboard.blade.php">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <i class="nc-icon nc-app"></i>
                        <p>
                            Components
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="components/buttons.html">
                                    <span class="sidebar-mini">B</span>
                                    <span class="sidebar-normal">Buttons</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/grid.html">
                                    <span class="sidebar-mini">GS</span>
                                    <span class="sidebar-normal">Grid System</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/panels.html">
                                    <span class="sidebar-mini">P</span>
                                    <span class="sidebar-normal">Panels</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/sweet-alert.html">
                                    <span class="sidebar-mini">SA</span>
                                    <span class="sidebar-normal">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/notifications.html">
                                    <span class="sidebar-mini">N</span>
                                    <span class="sidebar-normal">Notifications</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/icons.html">
                                    <span class="sidebar-mini">I</span>
                                    <span class="sidebar-normal">Icons</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="components/typography.html">
                                    <span class="sidebar-mini">T</span>
                                    <span class="sidebar-normal">Typography</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="nc-icon nc-notes"></i>
                        <p>
                            Forms
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="forms/regular.html">
                                    <span class="sidebar-mini">Rf</span>
                                    <span class="sidebar-normal">Regular Forms</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="forms/extended.html">
                                    <span class="sidebar-mini">Ef</span>
                                    <span class="sidebar-normal">Extended Forms</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="forms/validation.html">
                                    <span class="sidebar-mini">Vf</span>
                                    <span class="sidebar-normal">Validation Forms</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="forms/wizard.html">
                                    <span class="sidebar-mini">W</span>
                                    <span class="sidebar-normal">Wizard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>
                            Tables
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="tablesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="tables/regular.html">
                                    <span class="sidebar-mini">RT</span>
                                    <span class="sidebar-normal">Regular Tables</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="tables/extended.html">
                                    <span class="sidebar-mini">ET</span>
                                    <span class="sidebar-normal">Extended Tables</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="tables/bootstrap-table.html">
                                    <span class="sidebar-mini">BT</span>
                                    <span class="sidebar-normal">Bootstrap Table</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="tables/datatables.net.html">
                                    <span class="sidebar-mini">DT</span>
                                    <span class="sidebar-normal">DataTables.net</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>
                            Maps
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="mapsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="maps/google.html">
                                    <span class="sidebar-mini">GM</span>
                                    <span class="sidebar-normal">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="maps/vector.html">
                                    <span class="sidebar-mini">VM</span>
                                    <span class="sidebar-normal">Vector maps</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="maps/fullscreen.html">
                                    <span class="sidebar-mini">FSM</span>
                                    <span class="sidebar-normal">Full Screen Map</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="charts.html">
                        <i class="nc-icon nc-chart-bar-32"></i>
                        <p>Charts</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="calendar.html">
                        <i class="nc-icon nc-single-copy-04"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                        <i class="nc-icon nc-puzzle-10"></i>
                        <p>
                            Pages
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="pagesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="pages/login.html">
                                    <span class="sidebar-mini">LP</span>
                                    <span class="sidebar-normal">Login Page</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="pages/register.html">
                                    <span class="sidebar-mini">RP</span>
                                    <span class="sidebar-normal">Register Page</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="pages/lock.html">
                                    <span class="sidebar-mini">LSP</span>
                                    <span class="sidebar-normal">Lock Screen Page</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link" href="pages/user.html">
                                    <span class="sidebar-mini">UP</span>
                                    <span class="sidebar-normal">User Page</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link" href="#lbd">
                                    <span class="sidebar-mini">MCS</span>
                                    <span class="sidebar-normal">More coming soon...</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                            <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                            <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo"> Dashboard PRO </a>
                </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                    <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="nav navbar-nav mr-auto">
                        <form class="navbar-form navbar-left navbar-search-form" role="search">
                            <div class="input-group">
                                <i class="nc-icon nc-zoom-split"></i>
                                <input type="text" value="" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-planet"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Create New Post</a>
                                <a class="dropdown-item" href="#">Manage Something</a>
                                <a class="dropdown-item" href="#">Do Nothing</a>
                                <a class="dropdown-item" href="#">Submit to live</a>
                                <li class="divider"></li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-bell-55"></i>
                                <span class="notification">5</span>
                                <span class="d-lg-none">Notification</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">Notification 1</a>
                                <a class="dropdown-item" href="#">Notification 2</a>
                                <a class="dropdown-item" href="#">Notification 3</a>
                                <a class="dropdown-item" href="#">Notification 4</a>
                                <a class="dropdown-item" href="#">Notification 5</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bullet-list-67"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-email-85"></i> Messages
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-umbrella-13"></i> Help Center
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-settings-90"></i> Settings
                                </a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                                </a>
                                <a href="#" class="dropdown-item text-danger">
                                    <i class="nc-icon nc-button-power"></i> Log out
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-chart text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="numbers">
                                            <p class="card-category">Number</p>
                                            <h4 class="card-title">150GB</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i> Update Now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-light-3 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="numbers">
                                            <p class="card-category">Revenue</p>
                                            <h4 class="card-title">$ 1,345</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-calendar-o"></i> Last day
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-vector text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="numbers">
                                            <p class="card-category">Errors</p>
                                            <h4 class="card-title">23</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i> In the last hour
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="numbers">
                                            <p class="card-category">Followers</p>
                                            <h4 class="card-title">+45K</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i> Update now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Global Sales by Top Locations</h4>
                                <p class="card-category">All products that were shipped</p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../assets/img/flags/US.png" </div>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class="text-right">
                                                        2.920
                                                    </td>
                                                    <td class="text-right">
                                                        53.23%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../assets/img/flags/DE.png" </div>
                                                    </td>
                                                    <td>Germany</td>
                                                    <td class="text-right">
                                                        1.300
                                                    </td>
                                                    <td class="text-right">
                                                        20.43%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../assets/img/flags/AU.png" </div>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class="text-right">
                                                        760
                                                    </td>
                                                    <td class="text-right">
                                                        10.35%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../assets/img/flags/GB.png" </div>
                                                    </td>
                                                    <td>United Kingdom</td>
                                                    <td class="text-right">
                                                        690
                                                    </td>
                                                    <td class="text-right">
                                                        7.87%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../assets/img/flags/RO.png" </div>
                                                    </td>
                                                    <td>Romania</td>
                                                    <td class="text-right">
                                                        600
                                                    </td>
                                                    <td class="text-right">
                                                        5.94%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../assets/img/flags/BR.png" </div>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class="text-right">
                                                        550
                                                    </td>
                                                    <td class="text-right">
                                                        4.34%
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <div id="worldMap" style="height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Email Statistics</h4>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-body ">
                                <div id=chartEmail class="ct-chart ct-perfect-fourth"></div>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Open
                                    <i class="fa fa-circle text-danger"></i> Bounce
                                    <i class="fa fa-circle text-warning"></i> Unsubscribe
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Users Behavior</h4>
                                <p class="card-category">24 Hours performance</p>
                            </div>
                            <div class="card-body ">
                                <div id=chartHours class="ct-chart"></div>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Open
                                    <i class="fa fa-circle text-danger"></i> Click
                                    <i class="fa fa-circle text-warning"></i> Click Second Time
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">2017 Sales</h4>
                                <p class="card-category">All products including Taxes</p>
                            </div>
                            <div class="card-body ">
                                <div id="chartActivity" class="ct-chart"></div>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Tesla Model S
                                    <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-check"></i> Data information certified
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card  card-tasks">
                            <div class="card-header ">
                                <h4 class="card-title">Tasks</h4>
                                <p class="card-category">Backend development</p>
                            </div>
                            <div class="card-body ">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" checked>
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Read "Following makes Medium better"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" checked>
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Unfollow 5 enemies from twitter</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="https://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                    </p>
                </nav>
            </div>
        </footer>
    </div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch-image">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="switch-mini">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Fixed Navbar</p>
                    <label class="switch-nav">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>
            <li class="button-container">
                <div>
                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get free demo!</a>
                </div>
            </li>
            <li class="button-container">
                <div>
                    <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block">Buy now!</a>
                </div>
            </li>
            <li class="button-container">
                <div>
                    <a href="https://demos.creative-tim.com/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documention</a>
                </div>
            </li>
            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round twitter-sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round facebook-sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
</body>
@include('backend.partials.script')
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 20:19:51 GMT -->
</html>