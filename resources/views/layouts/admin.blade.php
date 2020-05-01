<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Dashboard </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/MoneAdmin.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/Font-Awesome/css/font-awesome.css')}}" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="{{asset('assets/css/layout2.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/flot/examples/examples.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/plugins/timeline/timeline.css')}}" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >


        <!-- HEADER SECTION -->
        @include('includes.admin.tobbar')
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
        @include('includes.admin.menu')
        <!--END MENU SECTION -->



        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                
            </div>

            
            

            
        </div>

    </div>

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="{{asset('assets/plugins/jquery-2.0.3.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.time.js')}}"></script>
    <script  src="{{asset('assets/plugins/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/js/for_index.js')}}"></script>

    <!-- END PAGE LEVEL SCRIPTS -->


</body>

<!-- END BODY -->
</html>
