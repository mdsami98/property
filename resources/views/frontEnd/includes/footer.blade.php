<footer id="footer-wrapper">

    <div id="footer" class="container">

        <div class="row">

            <div class="span3">
                <section id="text-3" class="widget clearfix widget_text">
                    <h3 class="title">About Real Homes</h3>
                    <div class="textwidget">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>

                    </div>
                </section>
            </div>

            <div class="span3">
                <section id="recent-posts-4" class="widget clearfix widget_recent_entries">
                    <h3 class="title">Recent Posts</h3>
                    <ul>

                        @if(count($recentposts) > 0)
                            @foreach($recentposts as $recentpost)
                        <li>
                            <a href="{{route('user.singleView',['id'=> $recentpost->id])}}">{{$recentpost->title}}</a>
                        </li>
                            @endforeach
                        @endif

                    </ul>
                </section>
            </div>

            <div class="clearfix visible-tablet"></div>

            <div class="span3">
                <section class="widget">
                    <h3 class="title">Quick links</h3>
                    <ul id="twitter_update_list">
                        @if($types)
                            @foreach($types as $type)
                                <li class="@if(url()->current() == url('/property/type/{id}')){{'current-menu-item'}}@endif"><a href="{{route('user.typeView', $type->id)}}">{{$type->title}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </section>

            </div>

            <div class="span3">
                <section id="text-2" class="widget clearfix widget_text">
                    <h3 class="title">Contact Info</h3>
                    <div class="textwidget"><p>Mohammod pur,<br />
                            lorem, FL 12345</p>
                        <p>Phone: 01781501769</p>
                        <p>Email: <a href="mailto:info@yourwebsite.com">demo@gmail.com</a></p>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div id="footer-bottom" class="container">

        <div class="row">
            <div class="span6">
                <p class="copyright">Copyright © 2019 Aagami.  All Rights Reserved.</p>
            </div>
            <div class="span6">
                <p></p>
            </div>
        </div>

    </div>
    <!-- End Footer Bottom -->

</footer>
