{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamspos.dreamguystech.com/html/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 07:06:45 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Dreams Pos admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="https://dreamspos.dreamguystech.com/html/template/assets/img/favicon.png">

<link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/animate.css">

<link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<div class="header">

<div class="header-left active">
<a href="https://dreamspos.dreamguystech.com/html/template/index.html" class="logo logo-normal">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/logo.png" alt>
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/index.html" class="logo logo-white">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/logo-white.png" alt>
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/index.html" class="logo-small">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/logo-small.png" alt>
</a>
<a id="toggle_btn" href="javascript:void(0);">
<i data-feather="chevrons-left" class="feather-16"></i>
</a>
</div>

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
</a>

<ul class="nav user-menu">

<li class="nav-item nav-searchinputs">
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="#">
<div class="searchinputs">
<input type="text" placeholder="Search">
<div class="search-addon">
<span><i data-feather="search" class="feather-14"></i></span>
</div>
</div>

</form>
</div>
</li>


<li class="nav-item dropdown has-arrow flag-nav nav-item-box">
<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
<i data-feather="globe"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="javascript:void(0);" class="dropdown-item active">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/flags/us.png" alt height="16"> English
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/flags/fr.png" alt height="16"> French
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/flags/es.png" alt height="16"> Spanish
</a>
<a href="javascript:void(0);" class="dropdown-item">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/flags/de.png" alt height="16"> German
</a>
</div>
</li>

<li class="nav-item nav-item-box">
<a href="javascript:void(0);" id="btnFullscreen">
<i data-feather="maximize"></i>
</a>
</li>
<li class="nav-item nav-item-box">
<a href="https://dreamspos.dreamguystech.com/html/template/email.html">
<i data-feather="mail"></i>
<span class="badge rounded-pill">1</span>
</a>
</li>

<li class="nav-item dropdown nav-item-box">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i data-feather="bell"></i><span class="badge rounded-pill">2</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="https://dreamspos.dreamguystech.com/html/template/activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="https://dreamspos.dreamguystech.com/html/template/assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="https://dreamspos.dreamguystech.com/html/template/activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="https://dreamspos.dreamguystech.com/html/template/assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="https://dreamspos.dreamguystech.com/html/template/activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="https://dreamspos.dreamguystech.com/html/template/assets/img/profiles/avatar-06.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="https://dreamspos.dreamguystech.com/html/template/activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="https://dreamspos.dreamguystech.com/html/template/assets/img/profiles/avatar-17.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="https://dreamspos.dreamguystech.com/html/template/activities.html">
<div class="media d-flex">
<span class="avatar flex-shrink-0">
<img alt src="https://dreamspos.dreamguystech.com/html/template/assets/img/profiles/avatar-13.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="https://dreamspos.dreamguystech.com/html/template/activities.html">View all Notifications</a>
</div>
</div>
</li>

<li class="nav-item nav-item-box">
<a href="https://dreamspos.dreamguystech.com/html/template/generalsettings.html"><i data-feather="settings"></i></a>
</li>
<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
<span class="user-info">
<span class="user-letter">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/profiles/avator1.jpg" alt class="img-fluid">
</span>
<span class="user-detail">
<span class="user-name">{{Auth::user()->name}}</span>
<span class="user-role">{{Auth::user()->getRoleNames()[0]}}</span>
</span>
</span>
</a>
<div class="dropdown-menu menu-drop-user">
<div class="profilename">
<div class="profileset">
<span class="user-img"><img src="https://dreamspos.dreamguystech.com/html/template/assets/img/profiles/avator1.jpg" alt>
<span class="status online"></span></span>
<div class="profilesets">
<h6>John Smilga</h6>
<h5>Super Admin</h5>
</div>
</div>
<hr class="m-0">
<a class="dropdown-item" href="https://dreamspos.dreamguystech.com/html/template/profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
<a class="dropdown-item" href="https://dreamspos.dreamguystech.com/html/template/generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
<hr class="m-0">
<a class="dropdown-item logout pb-0" href="https://dreamspos.dreamguystech.com/html/template/signin.html"><img src="https://dreamspos.dreamguystech.com/html/template/assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
</div>
</div>
</li>
</ul>


<div class="dropdown mobile-user-menu">
<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="https://dreamspos.dreamguystech.com/html/template/profile.html">My Profile</a>
<a class="dropdown-item" href="https://dreamspos.dreamguystech.com/html/template/generalsettings.html">Settings</a>
<a class="dropdown-item" href="https://dreamspos.dreamguystech.com/html/template/signin.html">Logout</a>
</div>
</div>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="submenu-open">
<h6 class="submenu-hdr">Main</h6>
<ul>
<li class="active">
<a href="https://dreamspos.dreamguystech.com/html/template/index.html"><i data-feather="grid"></i><span>Dashboard</span></a>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="smartphone"></i><span>Application</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/chat.html">Chat</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/calendar.html">Calendar</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/email.html">Email</a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Products</h6>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/productlist.html"><i data-feather="box"></i><span>Products</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/addproduct.html"><i data-feather="plus-square"></i><span>Create Product</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/categorylist.html"><i data-feather="codepen"></i><span>Category</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/brandlist.html"><i data-feather="tag"></i><span>Brands</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/subcategorylist.html"><i data-feather="speaker"></i><span>Sub Category</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/barcode.html"><i data-feather="align-justify"></i><span>Print Barcode</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/importproduct.html"><i data-feather="minimize-2"></i><span>Import Products</span></a></li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Sales</h6>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/saleslist.html"><i data-feather="shopping-cart"></i><span>Sales</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/invoicereport.html"><i data-feather="file-text"></i><span>Invoices</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/salesreturnlists.html"><i data-feather="copy"></i><span>Sales Return</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/quotationList.html"><i data-feather="save"></i><span>Quotation</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/pos.html"><i data-feather="hard-drive"></i><span>POS</a></li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="shuffle"></i><span>Transfer</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/transferlist.html">Transfer List</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/importtransfer.html">Import Transfer </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="corner-up-left"></i><span>Return</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/salesreturnlist.html">Sales Return</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/purchasereturnlist.html">Purchase Return</a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Purchases</h6>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/purchaselist.html"><i data-feather="shopping-bag"></i><span>Purchases</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/importpurchase.html"><i data-feather="minimize-2"></i><span>Import Purchases</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/purchaseorderreport.html"><i data-feather="file-minus"></i><span>Purchase Order</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/purchasereturnlist.html"><i data-feather="refresh-cw"></i><span>Purchase Return</span></a></li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Finance & Accounts</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="file-text"></i><span>Expense</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/expenselist.html">Expenses</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/expensecategory.html">Expense Category</a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Peoples</h6>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/customerlist.html"><i data-feather="user"></i><span>Customers</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/supplierlist.html"><i data-feather="users"></i><span>Suppliers</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/userlist.html"><i data-feather="user-check"></i><span>Users</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/storelist.html"><i data-feather="home"></i><span>Stores</span></a></li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Reports</h6>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/salesreport.html"><i data-feather="bar-chart-2"></i><span>Sales Report</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/purchaseorderreport.html"><i data-feather="pie-chart"></i><span>Purchase report</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/inventoryreport.html"><i data-feather="credit-card"></i><span>Inventory Report</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/invoicereport.html"><i data-feather="file"></i><span>Invoice Report</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/purchasereport.html"><i data-feather="bar-chart"></i><span>Purchase Report</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/supplierreport.html"><i data-feather="database"></i><span>Supplier Report</span></a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/customerreport.html"><i data-feather="pie-chart"></i><span>Customer Report</span></a></li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">User Management</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="users"></i><span>Manage Users</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/newuser.html">New User </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/userlists.html">Users List</a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Pages</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="shield"></i><span>Authentication</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/signin.html">Log in</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/signup.html">Register</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/forgetpassword.html">Forgot Password</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/resetpassword.html">Reset Password</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error Pages</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/error-404.html">404 Error </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/error-500.html">500 Error </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="map"></i><span>Places</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/countrieslist.html">Countries</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/statelist.html">States</a></li>
</ul>
</li>
<li>
<a href="https://dreamspos.dreamguystech.com/html/template/blankpage.html"><i data-feather="file"></i><span>Blank Page</span> </a>
</li>
<li>
<a href="https://dreamspos.dreamguystech.com/html/template/components.html"><i data-feather="pen-tool"></i><span>Components</span> </a>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">UI Interface</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="layers"></i><span>Elements</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/sweetalerts.html">Sweet Alerts</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/tooltip.html">Tooltip</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/popover.html">Popover</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/ribbon.html">Ribbon</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/clipboard.html">Clipboard</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/drag-drop.html">Drag & Drop</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/rangeslider.html">Range Slider</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/rating.html">Rating</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/toastr.html">Toastr</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/text-editor.html">Text Editor</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/counter.html">Counter</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/scrollbar.html">Scrollbar</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/spinner.html">Spinner</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/notification.html">Notification</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/lightbox.html">Lightbox</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/stickynote.html">Sticky Note</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/timeline.html">Timeline</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-wizard.html">Form Wizard</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="bar-chart-2"></i><span>Charts</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/chart-apex.html">Apex Charts</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/chart-js.html">Chart Js</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/chart-morris.html">Morris Charts</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/chart-flot.html">Flot Charts</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/chart-peity.html">Peity Charts</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="database"></i><span>Icons</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-fontawesome.html">Fontawesome Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-feather.html">Feather Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-ionic.html">Ionic Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-material.html">Material Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-pe7.html">Pe7 Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-simpleline.html">Simpleline Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-themify.html">Themify Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-weather.html">Weather Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-typicon.html">Typicon Icons</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/icon-flag.html">Flag Icons</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="edit"></i><span>Forms</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-basic-inputs.html">Basic Inputs </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-input-groups.html">Input Groups </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-horizontal.html">Horizontal Form </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-vertical.html"> Vertical Form </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-mask.html">Form Mask </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-validation.html">Form Validation </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-select2.html">Form Select2 </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/form-fileupload.html">File Upload </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="columns"></i><span>Tables</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/tables-basic.html">Basic Tables </a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/data-tables.html">Data Table </a></li>
</ul>
</li>
</ul>
</li>
<li class="submenu-open">
<h6 class="submenu-hdr">Settings</h6>
<ul>
<li class="submenu">
<a href="javascript:void(0);"><i data-feather="settings"></i><span>Settings</span><span class="menu-arrow"></span></a>
<ul>
<li><a href="https://dreamspos.dreamguystech.com/html/template/generalsettings.html">General Settings</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/emailsettings.html">Email Settings</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/paymentsettings.html">Payment Settings</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/currencysettings.html">Currency Settings</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/grouppermissions.html">Group Permissions</a></li>
<li><a href="https://dreamspos.dreamguystech.com/html/template/taxrates.html">Tax Rates</a></li>
</ul>
</li>
<li>
<a href="https://dreamspos.dreamguystech.com/html/template/signin.html"><i data-feather="log-out"></i><span>Logout</span> </a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>

<div class="page-wrapper">
<div class="content">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget">
<div class="dash-widgetimg">
<span><img src="https://dreamspos.dreamguystech.com/html/template/assets/img/icons/dash1.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
<h6>Total Purchase Due</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash1">
<div class="dash-widgetimg">
<span><img src="https://dreamspos.dreamguystech.com/html/template/assets/img/icons/dash2.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
<h6>Total Sales Due</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash2">
<div class="dash-widgetimg">
<span><img src="https://dreamspos.dreamguystech.com/html/template/assets/img/icons/dash3.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="385656.50">385,656.50</span></h5>
<h6>Total Sale Amount</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash3">
<div class="dash-widgetimg">
<span><img src="https://dreamspos.dreamguystech.com/html/template/assets/img/icons/dash4.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>$<span class="counters" data-count="40000.00">400.00</span></h5>
<h6>Total Sale Amount</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>100</h4>
<h5>Customers</h5>
</div>
<div class="dash-imgs">
<i data-feather="user"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das1">
<div class="dash-counts">
<h4>100</h4>
<h5>Suppliers</h5>
</div>
<div class="dash-imgs">
<i data-feather="user-check"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4>100</h4>
<h5>Purchase Invoice</h5>
</div>
<div class="dash-imgs">
<i data-feather="file-text"></i>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das3">
<div class="dash-counts">
<h4>105</h4>
<h5>Sales Invoice</h5>
</div>
<div class="dash-imgs">
<i data-feather="file"></i>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-7 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h5 class="card-title mb-0">Purchase & Sales</h5>
<div class="graph-sets">
<ul>
<li>
<span>Sales</span>
</li>
<li>
<span>Purchase</span>
</li>
</ul>
<div class="dropdown">
<button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
2022 <img src="https://dreamspos.dreamguystech.com/html/template/assets/img/icons/dropdown.svg" alt="img" class="ms-2">
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li>
<a href="javascript:void(0);" class="dropdown-item">2022</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2021</a>
</li>
<li>
<a href="javascript:void(0);" class="dropdown-item">2020</a>
</li>
</ul>
</div>
</div>
</div>
<div class="card-body">
<div id="sales_charts"></div>
</div>
</div>
</div>
<div class="col-lg-5 col-sm-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header pb-0 d-flex justify-content-between align-items-center">
<h4 class="card-title mb-0">Recently Added Products</h4>
<div class="dropdown">
<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
<i class="fa fa-ellipsis-v"></i>
</a>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html" class="dropdown-item">Product List</a>
</li>
<li>
<a href="https://dreamspos.dreamguystech.com/html/template/addproduct.html" class="dropdown-item">Product Add</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>Sno</th>
<th>Products</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td class="productimgname">
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html" class="product-img">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product22.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">Apple Earpods</a>
</td>
<td>$891.2</td>
</tr>
<tr>
<td>2</td>
<td class="productimgname">
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html" class="product-img">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product23.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">iPhone 11</a>
</td>
<td>$668.51</td>
</tr>
<tr>
<td>3</td>
<td class="productimgname">
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html" class="product-img">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product24.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">samsung</a>
</td>
<td>$522.29</td>
</tr>
<tr>
<td>4</td>
<td class="productimgname">
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html" class="product-img">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product6.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">Macbook Pro</a>
</td>
<td>$291.01</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">Expired Products</h4>
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>SNo</th>
<th>Product Code</th>
<th>Product Name</th>
<th>Brand Name</th>
<th>Category Name</th>
<th>Expiry Date</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><a href="javascript:void(0);">IT0001</a></td>
<td class="productimgname">
<a class="product-img" href="https://dreamspos.dreamguystech.com/html/template/productlist.html">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product2.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">Orange</a>
</td>
<td>N/D</td>
<td>Fruits</td>
<td>12-12-2022</td>
</tr>
<tr>
<td>2</td>
<td><a href="javascript:void(0);">IT0002</a></td>
<td class="productimgname">
<a class="product-img" href="https://dreamspos.dreamguystech.com/html/template/productlist.html">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product3.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">Pineapple</a>
</td>
<td>N/D</td>
<td>Fruits</td>
<td>25-11-2022</td>
</tr>
<tr>
<td>3</td>
<td><a href="javascript:void(0);">IT0003</a></td>
<td class="productimgname">
<a class="product-img" href="https://dreamspos.dreamguystech.com/html/template/productlist.html">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product4.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">Stawberry</a>
</td>
<td>N/D</td>
<td>Fruits</td>
<td>19-11-2022</td>
</tr>
<tr>
<td>4</td>
<td><a href="javascript:void(0);">IT0004</a></td>
<td class="productimgname">
<a class="product-img" href="https://dreamspos.dreamguystech.com/html/template/productlist.html">
<img src="https://dreamspos.dreamguystech.com/html/template/assets/img/product/product5.jpg" alt="product">
</a>
<a href="https://dreamspos.dreamguystech.com/html/template/productlist.html">Avocat</a>
</td>
<td>N/D</td>
<td>Fruits</td>
<td>20-11-2022</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="https://dreamspos.dreamguystech.com/html/template/assets/js/jquery-3.6.0.min.js"></script>

<script src="https://dreamspos.dreamguystech.com/html/template/assets/js/feather.min.js"></script>

<script src="https://dreamspos.dreamguystech.com/html/template/assets/js/jquery.slimscroll.min.js"></script>

<script src="https://dreamspos.dreamguystech.com/html/template/assets/js/jquery.dataTables.min.js"></script>
<script src="https://dreamspos.dreamguystech.com/html/template/assets/js/dataTables.bootstrap4.min.js"></script>

<script src="https://dreamspos.dreamguystech.com/html/template/assets/js/bootstrap.bundle.min.js"></script>

<script src="https://dreamspos.dreamguystech.com/html/template/assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="https://dreamspos.dreamguystech.com/html/template/assets/plugins/apexchart/chart-data.js"></script>

<script src="https://dreamspos.dreamguystech.com/html/template/assets/js/script.js"></script>
</body>

<!-- Mirrored from dreamspos.dreamguystech.com/html/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2023 07:06:45 GMT -->
</html>
