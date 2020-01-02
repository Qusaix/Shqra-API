<aside class="app-layout-drawer">

    <!-- Drawer scroll area -->
    <div class="app-layout-drawer-scroll">
        <!-- Drawer logo -->
        <div id="logo" class="drawer-header">
            <a href="index.html"><img class="img-responsive" src="{{asset('assets_d/img/logo/logo-backend.png')}}" title="AppUI" alt="AppUI" /></a>
        </div>

        <!-- Drawer navigation -->
        <nav class="drawer-main">
            <ul class="nav nav-drawer">

                <li class="nav-item nav-drawer-header">Apps</li>

                <li class="{{(Route::current()->getName() == 'dashboard.home') ? 'nav-item active'  : 'nav-item'}}">
                    <a href="{{route('dashboard.home')}}"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                </li>

                <li class='{{ (Route::current()->getName() == 'dashboard.ads') ? "nav-item active" : "nav-item" }}'>

                    <a href="{{route('dashboard.ads')}}"><i class="fa fa-money"></i> Ads</a>

                </li>

                <li class="nav-item nav-drawer-header">Components</li>

               

            </ul>
        </nav>
        <!-- End drawer navigation -->

        <div class="drawer-footer">
            {{-- <p class="copyright">AppUI Template &copy;</p>
            <a href="https://shapebootstrap.net/item/1525731-appui-admin-frontend-template/?ref=rustheme" target="_blank" rel="nofollow">Purchase a license</a> --}}
        </div>
    </div>
    <!-- End drawer scroll area -->
</aside>