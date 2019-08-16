<div class="br-logo"><a href="{{route('admin.dashboard')}}"><span>[</span>Admin<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{route('admin.dashboard')}}" class="br-menu-link @if( request()->url() == route('admin.dashboard')) {{'active'}} @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link @if( request()->url() == route('admin.users.index')) {{'active'}}

        @elseif (request()->url() == route('admin.agents')) {{'active'}}
        @elseif (request()->url() == route('admin.admins')) {{'active'}}
        @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
                <span class="menu-item-label">Users list</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.users.index')}}" class="nav-link">Add Users</a></li>
            <li class="nav-item"><a href="{{route('admin.agents')}}" class="nav-link">All Agents</a></li>
            <li class="nav-item"><a href="{{route('admin.admins')}}" class="nav-link">All Admin</a></li>

        </ul>

        <a href="{{route('admin.category.index')}}" class="br-menu-link @if( request()->url() == route('admin.category.index')) {{'active'}} @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Category</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->


        <a href="{{route('admin.type.index')}}" class="br-menu-link @if( request()->url() == route('admin.type.index')) {{'active'}} @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Type</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link @if( request()->url() == route('admin.post.index')) {{'active'}}
        @elseif (request()->url() == route('admin.post.create')) {{'active'}}

        @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Post</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.post.create')}}" class="nav-link">Add Post</a></li>
            <li class="nav-item"><a href="{{route('admin.post.index')}}" class="nav-link">All Post</a></li>

        </ul>

        <a href="{{route('admin.comments.index')}}" class="br-menu-link @if( request()->url() == route('admin.comments.index')) {{'active'}} @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                <span class="menu-item-label">All Comments</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
{{--        <ul class="br-menu-sub nav flex-column">--}}
{{--            <li class="nav-item"><a href="{{route('admin.comments.index')}}" class="nav-link">All Comments</a></li>--}}
{{--        </ul>--}}


        <a href="{{route('admin.log.index')}}" class="br-menu-link @if( request()->url() == route('admin.comments.index')) {{'active'}} @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                <span class="menu-item-label">Security Log</span>
            </div><!-- menu-item -->
        </a>


        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Charts</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
            <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
            <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
            <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
            <li class="nav-item"><a href="chart-chartist.html" class="nav-link">Chartist</a></li>
            <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
            <li class="nav-item"><a href="chart-peity.html" class="nav-link">Peity</a></li>
        </ul>


        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
                <span class="menu-item-label">Maps</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
            <li class="nav-item"><a href="map-leaflet.html" class="nav-link">Leaflet Maps</a></li>
            <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
                <span class="menu-item-label">Utilities</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="background.html" class="nav-link">Background</a></li>
            <li class="nav-item"><a href="border.html" class="nav-link">Border</a></li>
            <li class="nav-item"><a href="height.html" class="nav-link">Height</a></li>
            <li class="nav-item"><a href="margin.html" class="nav-link">Margin</a></li>
            <li class="nav-item"><a href="padding.html" class="nav-link">Padding</a></li>
            <li class="nav-item"><a href="position.html" class="nav-link">Position</a></li>
            <li class="nav-item"><a href="typography-util.html" class="nav-link">Typography</a></li>
            <li class="nav-item"><a href="width.html" class="nav-link">Width</a></li>
        </ul>
        <a href="pages.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                <span class="menu-item-label">Apps &amp; Pages</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="layouts.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-book-outline tx-22"></i>
                <span class="menu-item-label">Layouts</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="sitemap.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-list-outline tx-22"></i>
                <span class="menu-item-label">Sitemap</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    </div><!-- br-sideleft-menu -->

    <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>

    <div class="info-list">
        <div class="d-flex align-items-center justify-content-between pd-x-15">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Memory Usage</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">CPU Usage</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">140.05</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Disk Usage</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">82.02%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Daily Traffic</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- d-flex -->
    </div><!-- info-lst -->

    <br>
</div>
