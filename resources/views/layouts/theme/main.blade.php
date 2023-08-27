<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="POS - Bootstrap Admin Template">
      <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
      <meta name="author" content="Dreamguys - Bootstrap Admin Template">
      <meta name="robots" content="noindex, nofollow">
      <title>@yield('title')</title>
      <link rel="shortcut icon" type="image/x-icon" href="https://dreamspos.dreamguystech.com/html/template/assets/img/favicon.png">
      <link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/animate.css">
      <link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/css/style.css">
      <link rel="stylesheet" href="https://dreamspos.dreamguystech.com/html/template/assets/plugins/alertify/alertify.min.css">
   </head>
   <body>
      <div id="global-loader">
         <div class="whirly-loader"> </div>
      </div>
      <div class="main-wrapper">
         @include('layouts.theme.header')
         @include('layouts.theme.sidebar')
         <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>@yield('page_title')</h4>
                        <h6>@yield('page_sub_title')</h6>
                    </div>
                </div>
               
                @yield('content')
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
      <script src="https://dreamspos.dreamguystech.com/html/template/assets/plugins/alertify/alertify.min.js"></script>
<script src="https://dreamspos.dreamguystech.com/html/template/assets/plugins/alertify/custom-alertify.min.js"></script>
      <script>
         @if(session()->has('message'))
            alertify.success("{{ session()->get('message') }}")
        @endif
      </script>
   </body>
</html>