@extends('layouts.frontend')

@section('content')
    <!-- Slider -->
    <div id="home-flexslider" class="clearfix">
        <div class="flexslider loading">
            <ul class="slides">
                <li>
                    <div class="desc-wrap">
                        <div class="slide-description">
                            <h3><a href="#">15421 Southwest 39th Terrace</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut&hellip;</p>
                            <span>$3,850 Per Month</span>
                            <a href="property.html" class="know-more">Know More</a>
                        </div>
                    </div>
                    <a href="#"><img src="{{asset('frontEnd/')}}/images/temp-images/slider-image.jpg" alt="15421 Southwest 39th Terrace"></a>
                </li>
                <li>
                    <div class="desc-wrap">
                        <div class="slide-description">
                            <h3><a href="property.html">Florida 5, Pinecrest, FL</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut&hellip;</p>
                            <span>$480,000 </span>
                            <a href="property.html" class="know-more">Know More</a>
                        </div>
                    </div>
                    <a href="#"><img src="{{asset('frontEnd/')}}/images/temp-images/slider-image2.jpg" alt="15421 Southwest 39th Terrace"></a>
                </li>
                <li>
                    <div class="desc-wrap">
                        <div class="slide-description">
                            <h3><a href="property.html">1200 Anastasia Avenue, Coral Gables</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut&hellip;</p>
                            <span>$625,000 </span>
                            <a href="property.html" class="know-more">Know More</a>
                        </div>
                    </div>
                    <a href="#"><img src="{{asset('frontEnd/')}}/images/temp-images/slider-image.jpg" alt="15421 Southwest 39th Terrace"></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Content -->
    <div class="container contents">
        <div class="row">
            <div class="span12">
                <!-- Main Content -->
                <div class="main ">
                    <section class="advance-search ">
                        <h3 class="search-heading"><i class="fa fa-search"></i>Find your Home</h3>
                        <div class="as-form-wrap">
                            <form class="advance-search-form clearfix" action="#" method="get">
                                <div class="option-bar large">
                                    <label for="keyword-txt">
                                        Keyword	</label>
                                    <input type="text" name="keyword" id="keyword-txt"
                                           value=""
                                           placeholder="Any"/>
                                </div>
                                <div class="option-bar large">
                                    <label for="property-id-txt">
                                        Property ID	</label>
                                    <input type="text" name="property-id" id="property-id-txt"
                                           value=""
                                           placeholder="Any" />
                                </div>
                                <div class="option-bar large">
                                    <label for="location">
                                        Location		</label>
                                    <span class="selectwrap">
            <select name="location" id="location" class="search-select"></select>
        </span>
                                </div>
                                <div class="option-bar large">
                                    <label for="select-status">
                                        Property Status	</label>
                                    <span class="selectwrap">
        <select name="status" id="select-status" class="search-select">
            <option value="any" selected="selected">Any</option>
            <option value="for-rent">For Rent</option>
            <option value="for-sale">For Sale</option>
        </select>
    </span>
                                </div>
                                <div class="option-bar large">
                                    <label for="select-property-type">
                                        Property Type	</label>
                                    <span class="selectwrap">
        <select name="type" id="select-property-type" class="search-select">
            <option value="any" selected="selected">Any</option>
            <option value="commercial"> Commercial</option>
            <option value="office">-  Office</option>
            <option value="shop">-  Shop</option>
            <option value="residential"> Residential</option>
            <option value="apartment">-  Apartment</option>
            <option value="apartment-building">-  Apartment Building</option>
            <option value="condominium">-  Condominium</option>
            <option value="single-family-home">-  Single Family Home</option>
            <option value="villa">-  Villa</option>
        </select>
    </span>
                                </div>
                                <div class="option-bar small">
                                    <label for="select-bedrooms">
                                        Min Beds	</label>
                                    <span class="selectwrap">
        <select name="bedrooms" id="select-bedrooms" class="search-select">
            <option value="any" selected="selected">Any</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </span>
                                </div>
                                <div class="option-bar small">
                                    <label for="select-bathrooms">
                                        Min Baths	</label>
                                    <span class="selectwrap">
        <select name="bathrooms" id="select-bathrooms" class="search-select">
            <option value="any" selected="selected">Any</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </span>
                                </div><div class="option-bar small price-for-others">
                                    <label for="select-min-price">
                                        Min Price	</label>
                                    <span class="selectwrap">
        <select name="min-price" id="select-min-price" class="search-select">
            <option value="any" selected="selected">Any</option>
            <option value="1000">$1,000</option>
            <option value="5000">$5,000</option>
            <option value="10000">$10,000</option>
            <option value="50000">$50,000</option>
            <option value="100000">$100,000</option>
            <option value="200000">$200,000</option>
            <option value="300000">$300,000</option>
            <option value="400000">$400,000</option>
            <option value="500000">$500,000</option>
            <option value="600000">$600,000</option>
            <option value="700000">$700,000</option>
            <option value="800000">$800,000</option>
            <option value="900000">$900,000</option>
            <option value="1000000">$1,000,000</option>
            <option value="1500000">$1,500,000</option>
            <option value="2000000">$2,000,000</option>
            <option value="2500000">$2,500,000</option>
            <option value="5000000">$5,000,000</option>
        </select>
    </span>
                                </div>

                                <div class="option-bar small price-for-others">
                                    <label for="select-max-price">
                                        Max Price	</label>
                                    <span class="selectwrap">
        <select name="max-price" id="select-max-price" class="search-select">
            <option value="any" selected="selected">Any</option>
            <option value="5000">$5,000</option>
            <option value="10000">$10,000</option>
            <option value="50000">$50,000</option>
            <option value="100000">$100,000</option>
            <option value="200000">$200,000</option>
            <option value="300000">$300,000</option>
            <option value="400000">$400,000</option>
            <option value="500000">$500,000</option>
            <option value="600000">$600,000</option>
            <option value="700000">$700,000</option>
            <option value="800000">$800,000</option>
            <option value="900000">$900,000</option>
            <option value="1000000">$1,000,000</option>
            <option value="1500000">$1,500,000</option>
            <option value="2000000">$2,000,000</option>
            <option value="2500000">$2,500,000</option>
            <option value="5000000">$5,000,000</option>
            <option value="10000000">$10,000,000</option>
        </select>
    </span>
                                </div>

                                <div class="option-bar small price-for-rent hide-fields">
                                    <label for="select-min-price-for-rent">
                                        Min Price	</label>
                                    <span class="selectwrap">
        <select name="min-price" id="select-min-price-for-rent" class="search-select" disabled="disabled">
            <option value="any" selected="selected">Any</option>
            <option value="500">$500</option>
            <option value="1000">$1,000</option>
            <option value="2000">$2,000</option>
            <option value="3000">$3,000</option>
            <option value="4000">$4,000</option>
            <option value="5000">$5,000</option>
            <option value="7500">$7,500</option>
            <option value="10000">$10,000</option>
            <option value="15000">$15,000</option>
            <option value="20000">$20,000</option>
            <option value="25000">$25,000</option>
            <option value="30000">$30,000</option>
            <option value="40000">$40,000</option>
            <option value="50000">$50,000</option>
            <option value="75000">$75,000</option>
            <option value="100000">$100,000</option>
        </select>
    </span>
                                </div>

                                <div class="option-bar small price-for-rent hide-fields">
                                    <label for="select-max-price-for-rent">
                                        Max Price	</label>
                                    <span class="selectwrap">
        <select name="max-price" id="select-max-price-for-rent" class="search-select" disabled="disabled">
            <option value="any" selected="selected">Any</option>
            <option value="1000">$1,000</option>
            <option value="2000">$2,000</option>
            <option value="3000">$3,000</option>
            <option value="4000">$4,000</option>
            <option value="5000">$5,000</option>
            <option value="7500">$7,500</option>
            <option value="10000">$10,000</option>
            <option value="15000">$15,000</option>
            <option value="20000">$20,000</option>
            <option value="25000">$25,000</option>
            <option value="30000">$30,000</option>
            <option value="40000">$40,000</option>
            <option value="50000">$50,000</option>
            <option value="75000">$75,000</option>
            <option value="100000">$100,000</option>
            <option value="150000">$150,000</option>
        </select>
    </span>
                                </div><div class="option-bar small">
                                    <label for="min-area">
                                        Min Area		<span>(sq ft)</span>
                                    </label>
                                    <input type="text" name="min-area" id="min-area" pattern="[0-9]+"
                                           value=""
                                           placeholder="Any"
                                           title="Only provide digits!" />
                                </div>

                                <div class="option-bar small">
                                    <label for="max-area">
                                        Max Area		<span>(sq ft)</span>
                                    </label>
                                    <input type="text" name="max-area" id="max-area" pattern="[0-9]+"
                                           value=""
                                           placeholder="Any"
                                           title="Only provide digits!" />
                                </div><div class="option-bar">
                                    <input type="submit" value="Search" class="real-btn btn">
                                </div>	<div class="clearfix"></div>

                                <div class="more-option-trigger">
                                    <a href="#">
                                        <i class="fa fa-plus-square-o"></i>
                                        Looking for certain features		</a>
                                </div>

                                <div class="more-options-wrapper clearfix collapsed">
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-2-stories"
                                               name="features[]"
                                               value="2-stories"
                                        />
                                        <label for="feature-2-stories">2 Stories <small>(6)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-26-ceilings"
                                               name="features[]"
                                               value="26-ceilings"
                                        />
                                        <label for="feature-26-ceilings">26' Ceilings <small>(1)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-central-heating"
                                               name="features[]"
                                               value="central-heating"
                                        />
                                        <label for="feature-central-heating">Central Heating <small>(7)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-dual-sinks"
                                               name="features[]"
                                               value="dual-sinks"
                                        />
                                        <label for="feature-dual-sinks">Dual Sinks <small>(7)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-electric-range"
                                               name="features[]"
                                               value="electric-range"
                                        />
                                        <label for="feature-electric-range">Electric Range <small>(10)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-emergency-exit"
                                               name="features[]"
                                               value="emergency-exit"
                                        />
                                        <label for="feature-emergency-exit">Emergency Exit <small>(7)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-fire-alarm"
                                               name="features[]"
                                               value="fire-alarm"
                                        />
                                        <label for="feature-fire-alarm">Fire Alarm <small>(5)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-fire-place"
                                               name="features[]"
                                               value="fire-place"
                                        />
                                        <label for="feature-fire-place">Fire Place <small>(9)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-home-theater"
                                               name="features[]"
                                               value="home-theater"
                                        />
                                        <label for="feature-home-theater">Home Theater <small>(3)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-hurricane-shutters"
                                               name="features[]"
                                               value="hurricane-shutters"
                                        />
                                        <label for="feature-hurricane-shutters">Hurricane Shutters <small>(1)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-laundry-room"
                                               name="features[]"
                                               value="laundry-room"
                                        />
                                        <label for="feature-laundry-room">Laundry Room <small>(6)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-lawn"
                                               name="features[]"
                                               value="lawn"
                                        />
                                        <label for="feature-lawn">Lawn <small>(6)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-marble-floors"
                                               name="features[]"
                                               value="marble-floors"
                                        />
                                        <label for="feature-marble-floors">Marble Floors <small>(8)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-next-to-busway"
                                               name="features[]"
                                               value="next-to-busway"
                                        />
                                        <label for="feature-next-to-busway">NEXT To Busway <small>(2)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-swimming-pool"
                                               name="features[]"
                                               value="swimming-pool"
                                        />
                                        <label for="feature-swimming-pool">Swimming Pool <small>(6)</small></label>
                                    </div>
                                    <div class="option-bar">
                                        <input type="checkbox"
                                               id="feature-wifi"
                                               name="features[]"
                                               value="wifi"
                                        />
                                        <label for="feature-wifi">Wifi <small>(6)</small></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    {{--  ====== Home Property--}}
                    <section id="home-properties-section" class="property-items ajax-pagination">

                        <div class="narrative">
                            <h2>We are Offering the Best Real Estate Deals</h2><p>Look at our Latest listed properties and check out the facilities on them, We have already sold more than 5,000 Homes and we are still going at very good pace. We would love you to look into these properties and we hope that you will find something match-able to your needs.</p></div>	<div id="home-properties-section-wrapper">
                            <div id="home-properties-section-inner">
                                <div id="home-properties-wrapper">

                                    <div id="home-properties" class="property-items-container clearfix">

                                    @if($posts)

                                        @foreach($posts as $post)

                                        <div class="span6 ">
                                            <article class="property-item clearfix">
                                                <h4><a href="property.html">{{$post->title}}</a></h4>

                                                <figure>

                                                    @php($i=1)
                                                    @foreach($post->photos as $postphoto)
                                                    <a href="property.html">
                                                        @if($i > 0)
                                                            <img src="{{$postphoto ? asset('img/'.$postphoto->photo) : 'http://via.placeholder.com/640x360'}}" alt="Property Image">
                                                        @endif

{{--                                                        <img src="{{asset('frontEnd/')}}/images/temp-images/property1.jpg" alt="Property Image">--}}
                                                    </a>
                                                        @php($i--)

                                                    @endforeach

                                                    <figcaption class="for-rent">For Rent</figcaption>
                                                </figure>

                                                <div class="detail">
                                                    <h5 class="price">
                                                        {{$post->price}} Tk. Per Month<small></small>            </h5>
                                                    <p>{{$post->description}}&hellip;</p>
                                                    <a class="more-details" href="property.html">More Details <i class="fa fa-caret-right"></i></a>
                                                </div>

                                                <div class="property-meta">
                                                    <span>{{$post->area}}&nbsp;sq ft</span>
                                                    <span>{{$post->badroom}}&nbsp;Bedrooms</span>
                                                    <span>{{$post->bathroom}}&nbsp;Bathrooms</span>
                                                    <span>{{$post->garage}}&nbsp;Garages</span>
                                                </div>
                                                <div class="property-meta">
                                                    <span>Address : {{$post->address}}</span>
                                                </div>
                                            </article>
                                        </div>
                                            @endforeach

                                        @endif



{{--                                        <div class="clearfix"></div>--}}




                                    </div><!-- end of #home-properties -->

                                </div><!-- end of #home-properties-wrapper -->

                                <div class='pagination'><a href='#' class='real-btn current' >1</a>
                                    <a href='#' class='real-btn' >2</a>
                                    <a href='#' class='real-btn' >3</a>
                                </div>
                            </div><!-- end of #home-properties-section-inner -->

                        </div><!-- end of #home-properties-section-wrapper -->

                    </section>

                    {{--  ====== Home Property--}}
                    <section class="featured-properties-carousel clearfix">
                        <div class="narrative">
                            <h3>Featured Properties</h3>
                            <p>View a list of Featured Properties.</p>
                        </div>
                        <div class="carousel es-carousel-wrapper">
                            <div class="es-carousel">
                                <ul class="clearfix">
                                    <li>
                                        <figure>
                                            <a href="property.html">
                                                <img src="{{asset('frontEnd/')}}/images/temp-images/property1.jpg" alt="Property Image">
                                            </a>
                                        </figure>
                                        <h4><a href="property.html">Villa in Hialeah, Dade County</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,&hellip; <a href="property.html"> Know More </a> </p>
                                        <span class="price">$7,500 Per Month</span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="property.html">
                                                <img src="{{asset('frontEnd/')}}/images/temp-images/property2.jpg" alt="Property Image">
                                            </a>
                                        </figure>
                                        <h4><a href="property.html">401 Biscayne Boulevard, Miami</a></h4>
                                        <p>Nam liber tempor cum soluta nobis eleifend option&hellip; <a href="property.html"> Know More </a> </p>
                                        <span class="price">$3,250 Per Month</span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="property.html">
                                                <img src="{{asset('frontEnd/')}}/images/temp-images/property4.jpg" alt="Property Image">
                                            </a>
                                        </figure>
                                        <h4><a href="property.html">15421 Southwest 39th Terrace</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,&hellip; <a href="property.html"> Know More </a> </p>
                                        <span class="price">$3,850 Per Month</span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="property.html">
                                                <img src="{{asset('frontEnd/')}}/images/temp-images/property5.jpg" alt="Property Image">
                                            </a>
                                        </figure>
                                        <h4><a href="property.html">3015 Grand Avenue, CocoWalk</a></h4>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud&hellip; <a href="property.html"> Know More </a> </p>
                                        <span class="price">$4,350 Per Month</span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="property.html">
                                                <img src="{{asset('frontEnd/')}}/images/temp-images/property1.jpg" alt="Property Image">
                                            </a>
                                        </figure>
                                        <h4><a href="property.html">60 Merrick Way, Miami</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,&hellip; <a href="property.html"> Know More </a> </p>
                                        <span class="price">$440,000 </span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="property.html">
                                                <img src="{{asset('frontEnd/')}}/images/temp-images/property2.jpg" alt="Property Image">
                                            </a>
                                        </figure>
                                        <h4><a href="property.html">Florida 5, Pinecrest, FL</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,&hellip; <a href="property.html"> Know More </a> </p>
                                        <span class="price">$480,000 </span>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="property.html">
                                                <img src="{{asset('frontEnd/')}}/images/temp-images/property4.jpg" alt="Property Image">
                                            </a>
                                        </figure>
                                        <h4><a href="property.html">1200 Anastasia Avenue, Coral Gables</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,&hellip; <a href="property.html"> Know More </a> </p>
                                        <span class="price">$625,000 </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End row -->

    </div>
    <!-- End content -->
    {{--Start patners--}}
    <div class="container page-carousel">
        <div class="row">
            <div class="span12">
                <section class="brands-carousel  clearfix">
                    <h3><span>Partners</span></h3>
                    <ul class="brands-carousel-list clearfix">
                        <li>
                            <a target="_blank" href="http://graphicriver.net/" title="graphicriver">
                                <img src="{{asset('frontEnd/')}}/images/graphicriver.png" alt="graphicriver">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://photodune.net/" title="photodune">
                                <img src="{{asset('frontEnd/')}}/images/photodune.png" alt="photodune">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://themeforest.net/" title="themeforest">
                                <img src="{{asset('frontEnd/')}}/images/themeforest.png" alt="themeforest">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://activeden.net/" title="activeden">
                                <img src="{{asset('frontEnd/')}}/images/activeden.png" alt="activeden">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://videohive.net/" title="videohive">
                                <img src="{{asset('frontEnd/')}}/images/videohive.png" alt="videohive">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://graphicriver.net/" title="graphicriver">
                                <img src="{{asset('frontEnd/')}}/images/graphicriver.png" alt="graphicriver">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://photodune.net/" title="photodune">
                                <img src="{{asset('frontEnd/')}}/images/photodune.png" alt="photodune">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://themeforest.net/" title="themeforest">
                                <img src="{{asset('frontEnd/')}}/images/themeforest.png" alt="themeforest">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://activeden.net/" title="activeden">
                                <img src="{{asset('frontEnd/')}}/images/activeden.png" alt="activeden">
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://videohive.net/" title="videohive">
                                <img src="{{asset('frontEnd/')}}/images/videohive.png" alt="videohive">
                            </a>
                        </li>


                    </ul>
                </section>
            </div>
        </div>
    </div>

    {{--End patners--}}

@stop
