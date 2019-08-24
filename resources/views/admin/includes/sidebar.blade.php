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

        <a href="{{route('admin.region.index')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Region</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

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









    </div><!-- br-sideleft-menu -->





    <br>
</div>
