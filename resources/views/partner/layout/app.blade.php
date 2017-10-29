<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add New User | Clear Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="{{ asset('vue/css/app.css') }}" rel="stylesheet"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{ asset('vue/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vue/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vue/vendors/select2/css/select2-bootstrap.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vue/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vue/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vue/vendors/iCheck/css/all.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('vue/css/custom.css') }}">

    <link href="{{ asset('vue/css/custom_css/wizard.css') }}" type="text/css" rel="stylesheet">

    @stack('page-css')
    <!--end of page level css -->

</head>

<body class="skin-default">
    <div class="preloader">
        <div class="loader_img"><img src="{{ asset('vue/img/loader.gif') }}" alt="loading..." height="64" width="64"></div>
    </div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        @include('model.layout.header')
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        @include('model.layout.left-side-bar')
        <aside class="right-side">
            <section class="content-header">
                  @yield('content')
            </section>
        </aside>    
    </div>    
    <!--wrapper ends-->
    <!-- global js -->
    <script src="{{ asset('vue/js/app.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="{{ asset('vue/vendors/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('vue/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vue/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vue/vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vue/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vue/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vue/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('vue/js/custom_js/adduser.js') }}" type="text/javascript"></script>
    @stack('page-script')
</body>    