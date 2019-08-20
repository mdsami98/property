<div class="br-logo"><a href="{{route('admin.dashboard')}}"><span>[</span>Agent<span>]</span></a></div>
<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{route('agent.home')}}" class="br-menu-link @if( request()->url() == route('agent.home')) {{'active'}} @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{route('agent.users.index')}}" class="br-menu-link @if( request()->url() == route('agent.users.index')) {{'active'}} @endif">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
                <span class="menu-item-label">Users list</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{route('agent.category.index')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">Category</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{route('agent.my.post')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">My post</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{route('agent.unpublished.post')}}" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                <span class="menu-item-label">unpublished post</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                <span class="menu-item-label">Post</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('agent.post.create')}}" class="nav-link">Add Post</a></li>
            <li class="nav-item"><a href="{{route('agent.post.index')}}" class="nav-link">All Post</a></li>

        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                <span class="menu-item-label">Comments</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{route('admin.comments.index')}}" class="nav-link">All Comments</a></li>
            <li class="nav-item"><a href="navigation-layouts.html" class="nav-link">Nav Layouts</a></li>
        </ul>


    </div><!-- br-sideleft-menu -->



    <br>
</div>


