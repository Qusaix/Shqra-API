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

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="{{asset('assets_d/js/plugins/slick/slick.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets_d/js/plugins/slick/slick-theme.min.css')}}" />
        <script src="{{asset('assets_d/js/core/jquery.min.js')}}"></script>


        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="{{asset('assets_d/css/font-awesome.css')}}" />
        <link rel="stylesheet" id="css-ionicons" href="{{asset('assets_d/css/ionicons.css')}}" />
        <link rel="stylesheet" id="css-bootstrap" href="{{asset('assets_d/css/bootstrap.css')}}" />
        <link rel="stylesheet" id="css-app" href="{{asset('assets_d/css/app.css')}}" />
        <link rel="stylesheet" id="css-app-custom" href="{{asset('assets_d/css/app-custom.css')}}" />
        <link rel="stylesheet" id="css-app-custom" href="{{asset('assets_d/css/custom-css.css')}}" />


        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

               

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
        <script src="{{asset('assets_d/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets_d/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets_d/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('assets_d/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('assets_d/js/app.js')}}"></script>
        <script src="{{asset('assets_d/js/app-custom.js')}}"></script>

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