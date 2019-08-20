<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-email-outline tx-24"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                    <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                        <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Messages</label>
                        <a href="#" class="tx-11">+ Add New Message</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="#" class="media-list-link">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="{{asset('admin/')}}/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                                        <span class="tx-11 tx-gray-500">2 minutes ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                                        <span class="tx-11 tx-gray-500">3 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="{{asset('admin/')}}/img/img7.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Robert Walker</p>
                                        <span class="tx-11 tx-gray-500">5 hours ago</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="#" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="{{asset('admin/')}}/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center justify-content-between mg-b-5">
                                        <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Larry Smith</p>
                                        <span class="tx-11 tx-gray-500">Yesterday</span>
                                    </div><!-- d-flex -->
                                    <p class="tx-12 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="pd-y-10 tx-center bd-t">
                            <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Messages</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->

            <div class="dropdown">
                <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>
                @php($i =0)
                @if(count($notificationPost)> 0)
                    @foreach($notificationPost as $post)
                        @if($post->publication_status == 0)
                            @php($i++)
                        @endif
                    @endforeach
                @endif

                   @if($i > 0)
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
                                                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800"></strong> Add new post and request for approve.</p>
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
                        <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
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
