<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Dashboard</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{asset('assets_d/img/favicons/apple-touch-icon.png')}}" />
        <link rel="icon" href="{{asset('assets_d/img/favicons/favicon.ico')}}" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{asset('assets_d/js/plugins/slick/slick.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets_d/js/plugins/slick/slick-theme.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/flipclock.css')}}">


        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="{{asset('assets_d/css/font-awesome.css')}}" />
        <link rel="stylesheet" id="css-ionicons" href="{{asset('assets_d/css/ionicons.css')}}" />
        <link rel="stylesheet" id="css-bootstrap" href="{{asset('assets_d/css/bootstrap.css')}}" />
        <link rel="stylesheet" id="css-app" href="{{asset('assets_d/css/app.css')}}" />
        <link rel="stylesheet" id="css-app-custom" href="{{asset('assets_d/css/app-custom.css')}}" />
        <link rel="stylesheet" id="custom-css" href="{{asset('assets_d/css/custom-css.css')}}" />

    
        <!-- End Stylesheets -->

        <!-- Datatable -->
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/b-1.6.1/datatables.min.js" defer></script>

        <script type="text/javascript" src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>
        {{-- <script type="text/javascript" src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script> --}}
       





    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <!--side menue-->
             @extends('dashboard.includes.sidemenue')
                <!-- End drawer -->

                <!-- Header -->
                <!-- navBar -->
            @extends('dashboard.includes.nav')
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- All The Content -->
                       @yield('section')
                    </div>
                    <!-- .container-fluid -->
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->
        <!-- End Apps Modal -->

        <div class="app-ui-mask-modal"></div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="{{asset('assets_d/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('assets_d/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets_d/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets_d/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('assets_d/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('assets_d/js/app.js')}}"></script>
        <script src="{{asset('assets_d/js/app-custom.js')}}"></script>
        <script src="{{asset('assets_d/js/custom-scripts.js')}}"></script>
		<script src="{{asset('assets_d/js/flipclock/flipclock.min.js')}}"></script>



        <!-- Page Plugins -->
        <script src="{{asset('assets_d/js/plugins/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets_d/js/plugins/chartjs/Chart.min.js')}}"></script>
        <script src="{{asset('assets_d/js/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('assets_d/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{asset('assets_d/js/plugins/flot/jquery.flot.stack.min.js')}}"></script>
        <script src="{{asset('assets_d/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>

        @include('sweetalert::alert')

        <!-- Page JS Code -->
        <script src="{{asset('assets_d/js/pages/index.js')}}"></script>
        <script>
            $(function()
            {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>

    </body>

</html>