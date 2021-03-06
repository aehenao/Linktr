<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.ico')}}">
    
    <title>@littlecory3 | Admin </title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/toastr/build/toastr.min.css')}}" rel="stylesheet">
    
    {{-- Toggle Button --}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    @yield('styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper">

        @include('includes.admin.tobbar')
        
        @include('includes.admin.menu')
        
        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">@yield('subtitle')</h4>
                    </div>
                </div>
            </div>

            @yield('content')
            
            @include('includes.admin.footer')
            
        </div>
        
    </div>
    
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js')}}"></script>

    <!--This page JavaScript -->
    
    <!-- Charts js Files -->
    <script src="{{ asset('assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js')}}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>

    <!-- this page js -->
    <script src="{{asset('assets/libs/toastr/build/toastr.min.js')}}"></script>

    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js')}}"></script>

    {{-- Toggle Button --}}
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    

    <script>
        $(function(){
            //const error = @json($errors->all());

            @if(Session::has('notification'))
                toastr.success('{{ session('notification') }}', 'Exito');
            @elseif(Session::has('error'))
                toastr.error('{{ session('error') }}', 'Error');
            @elseif(Session::has('alerta'))
                toastr.warning('{{ session('alerta') }}', 'Alerta');
            @endif

            // $('#ts-error').on('click', function() {
            //     toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');
            // });



});
</script>

<!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js')}}"></script>

    @yield('scripts')

</body>

</html>