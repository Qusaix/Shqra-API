<aside class="app-layout-drawer">

    <!-- Drawer scroll area -->
    <div class="app-layout-drawer-scroll">
        <!-- Drawer logo -->
        <div id="logo" class="drawer-header">
            <a href="index.html"><img class="img-responsive" src="https://s2.logaster.com/static/v3/img/products/logo.png" title="AppUI" alt="AppUI" /></a>
        </div>

        <!-- Drawer navigation -->
        <nav class="drawer-main">
            <ul class="nav nav-drawer">

                <li class="nav-item nav-drawer-header">Apps</li>

                <li class="{{(Route::current()->getName() == 'dashboard.home') ? 'nav-item active'  : 'nav-item'}}">
                    <a href="{{route('dashboard.home')}}"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                </li>
                @role('admin')
                    
                <li class='{{ (Route::current()->getName() == 'dashboard.ads') ? "nav-item active" : "nav-item" }}'>

                    <a href="{{route('dashboard.ads')}}"><i class="fa fa-money"></i> Ads</a>

                </li>

                <li class="nav-item nav-drawer-header">Edit/Add</li>

                <li class='{{ (Route::current()->getName() == 'dashboard.featured') ? "nav-item active" : "nav-item" }}'>

                    <a href="{{route('dashboard.featured')}}"><i class="fa fa-star"></i>Featured</a>

                </li>

                <li class='{{ (Route::current()->getName() == 'dashboard.countdown') ? "nav-item active" : "nav-item" }}'>

                    <a href="{{route('dashboard.countdown')}}"><i class="fa fa-clock-o"></i>Countdown</a>

                </li>

                <li class="nav-item nav-drawer-header">Analytics</li>

                <li class='{{ (Route::current()->getName() == 'dashboard.users') ? "nav-item active" : "nav-item" }}'>

                    <a href="{{route('dashboard.users')}}"><i class="fa fa-user"></i>Users</a>

                </li>

                <li class='{{ (Route::current()->getName() == 'dashboard.vendors') ? "nav-item active" : "nav-item" }}'>

                    <a href="{{route('dashboard.vendors')}}"><i class="fa fa-building"></i>Vendors</a>

                </li>
                @endrole

                <li class='{{ (Route::current()->getName() == 'dashbaord.product') ? "nav-item active" : "nav-item" }}'>

                    <a href="{{route('dashbaord.product')}}"><i class="fa fa-shopping-cart"></i>Products</a> 

                </li>

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