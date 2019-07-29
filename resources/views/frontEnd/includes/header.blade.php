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
                    <a href="#">
                        <i class="fa fa-star"></i>Favorites
                    </a>
                    @auth()

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
                    <span class="desktop-version">1-800-555-1234</span>
                    <a class="mobile-version" href="tel://1-800-555-1234" title="Make a Call">1-800-555-1234</a>
                    <span class="outer-strip"></span>
                </h2>
                <!-- Start Main Menu-->
                <nav class="main-menu">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="clearfix">
                            <li class=" current-menu-item">
                                <a href="index-2.html">Home</a>
                                <ul>
                                    <li><a href="home-with-google-map.html">Home with Google Map</a></li>
                                    <li><a href="home-with-news-post.html">Home with News Posts</a></li>
                                    <li><a href="home-with-custom-slider.html">Home with Custom Slider</a></li>
                                    <li><a href="home-with-properties-slider.html">Home with Properties Slider</a></li>
                                    <li><a href="home-with-simple-banner.html">Home with Simple Banner</a></li>
                                </ul>
                            </li>
                            <li><a href="listing.html">Listing</a>
                                <ul>
                                    <li><a href="simple-listing.html">Simple Listing</a></li>
                                    <li><a href="simple-listing-with-google-map.html">Simple Listing with Google Map</a></li>
                                    <li><a href="grid-listing.html">Grid Listing</a></li>
                                    <li><a href="grid-listing-with-google-map.html">Grid Listing with Google Map</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="agents.html">Agents</a></li>
                                    <li><a href="for-rent.html">For Rent</a></li>
                                    <li><a href="for-sale.html">For Sale</a></li>
                                    <li><a href="miami-city.html">Miami City</a></li>
                                    <li><a href="faqs-filterable.html">FAQs</a>
                                        <ul>
                                            <li><a href="faqs-filterable.html">FAQs &#8211; Filterable</a></li>
                                            <li><a href="faqs-toggle-style.html">FAQs &#8211; Toggle Style</a></li>
                                            <li><a href="faqs-simple-list.html">FAQs &#8211; Simple List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="columns.html">Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Category</a>
                                <ul>

                                @if($categories)
                                    @foreach($categories as $category)
                                        <li><a href="{{route('user.categoryView', $category->id)}}">{{$category->title}}</a></li>
                                    @endforeach
                                @endif
                                </ul>
                            </li>
                            <li><a href="#">Type</a>
                                <ul>

                                @if($types)
                                    @foreach($types as $type)
                                        <li><a href="{{route('user.typeView', $type->id)}}">{{$type->title}}</a></li>
                                    @endforeach
                                @endif
                                </ul>
                            </li>
                            @auth()
                            <li><a href="property.html">Profile</a>
                                <ul>
                                    <li><a href="property-default-var.html">My property</a></li>
                                    <li><a href="{{route('profile.show', Auth::user()->id)}}">My profile</a></li>

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
