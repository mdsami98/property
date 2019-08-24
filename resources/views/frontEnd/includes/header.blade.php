<div class="header-wrapper">

    <div class="container"><!-- Start Header Container -->

        <header id="header" class="clearfix">

            <div id="header-top" class="clearfix">
                <h2 id="contact-email">

                    Email us at :
                    <a href=""></a>
                </h2>

                <!-- Social Navigation -->
                <ul class="social_networks clearfix">
                    <li class="facebook">
                        <a target="_blank" href="https://www.facebook.com/InspiryThemes"><i class="fa fa-facebook fa-lg"></i></a>
                    </li>
                    <li class="twitter">
                        <a target="_blank" href="https://twitter.com/InspiryThemes"><i class="fa fa-twitter fa-lg"></i></a>
                    </li>
                    <li class="linkedin">
                        <a target="_blank" href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                    </li>
                    <li class="gplus">
                        <a target="_blank" href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                    </li>
                    <li class="rss">
                        <a target="_blank" href="http://realhomes.inspirythemes.biz/feed/?post_type=property"> <i class="fa fa-rss fa-lg"></i></a>
                    </li>
                </ul>

                <!-- User Navigation -->
                <div class="user-nav clearfix">
                    @auth()

                        <a href="{{route('favourite.index')}}">
                            <i class="fa fa-star"></i>Favorites
                        </a>

                        <a class="last" href="{{route('login')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        data-toggle="modal">
                        <i class="fa fa-sign-in"></i>Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @endauth

                    @guest()
                        <a class="last" href="{{route('login')}}" data-toggle="modal"><i class="fa fa-sign-in"></i>Login</a>
                    @endguest


                </div>

            </div>

            <!-- Logo -->
            <div id="logo">

                <a title="Real Homes" href="{{route('user.home')}}">
                    <img src="{{asset('frontEnd/')}}/images/logo.png" alt="Real Homes">
                </a>
                <h2 class="logo-heading only-for-print">
                    <a href="index-2.html"  title="Real Homes">
                        Real Homes
                    </a>
                </h2>
                <div class="tag-line"><span>Real Estate</span></div>
            </div>


            <div class="menu-and-contact-wrap">
                <h2  class="contact-number ">
                    <i class="fa fa-phone"></i>
                    <span class="desktop-version">017-81501769</span>
                    <a class="mobile-version" href="tel://01781501769" title="Make a Call">1-800-555-1234</a>
                    <span class="outer-strip"></span>
                </h2>
                <!-- Start Main Menu-->
                <nav class="main-menu">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="clearfix">
                            <li class="@if( request()->url() == route('user.home')) {{'current-menu-item'}} @endif">
                                <a href="{{route('user.home')}}">Home</a>

                            </li>

                            <li class=""><a href="{{route('user.premium', 1)}}">Premium posts</a>

                            </li>
                            <li class="@if( request()->url() == url('/category/{id}')) {{'current-menu-item'}} @endif"><a href="#">Category</a>
                                <ul>

                                @if($categories)
                                    @foreach($categories as $category)
                                        <li><a href="{{route('user.categoryView', $category->id)}}">{{$category->title}}</a></li>
                                    @endforeach
                                @endif
                                </ul>
                            </li>
                            <li class=""><a href="#">Type</a>
                                <ul>

                                @if($types)
                                    @foreach($types as $type)
                                        <li><a href="{{route('user.typeView', $type->id)}}">{{$type->title}}</a></li>
                                    @endforeach
                                @endif
                                </ul>
                            </li>
                            @auth()
                            <li><a href="{{route('profile.show', Auth::user()->id)}}">Profile</a>

                            </li>

                                <li>
                                    <a href="{{route('post.create')}}">Add property</a>
                                    <ul>
                                        <li><a href="{{route('post.index')}}">My property</a></li>


                                    </ul>

                                </li>
                            @endauth



                            <li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- End Main Menu -->
            </div>

        </header>

    </div> <!-- End Header Container -->

</div>
