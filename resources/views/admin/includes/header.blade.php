<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">

            <div class="dropdown">
                <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>

                @if(count($notificationPost)> 0)
                        <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                @endif




                </a>
                <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                    <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notifications</label>

                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->

                       @if(count($notificationPost)> 0)
                           @foreach($notificationPost as $post)
                                @if($post->publication_status == 0)
                                    <a href="{{route('admin.post.show', $post->id)}}" class="media-list-link read">
                                        <div class="media pd-x-20 pd-y-15">
                                            <img src="{{url('postimages',$post->image)}}" class="wd-50 ht-50 rounded-circle" alt="">
                                            <div class="media-body">
                                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">{{$post->user->name}}</strong> Add new post and request for approve.</p>
                                                <span class="tx-12">{{$post->created_at}}</span>
                                            </div>
                                        </div><!-- media -->
                                    </a>
                                @endif
                            @endforeach
                        @endif
                        <!-- loop ends here -->
                        <div class="pd-y-10 tx-center bd-t">
                            <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{Auth::user() ? Auth::user()->name : ''}}</span>
                    <img src="{{url('profileImage' ,Auth::user()->profile->image)}}" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li>
                            <a href="{{route('login')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                                <i class="icon ion-power"></i>
                                Log Out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>

    </div><!-- br-header-right -->
</div>
