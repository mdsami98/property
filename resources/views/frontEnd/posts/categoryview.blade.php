@extends('layouts.frontend')

@section('content')
    <!-- Slider -->
    <div id="home-flexslider" class="clearfix">
        <div class="flexslider loading">
            <ul class="slides">
                <li>
                    <div class="desc-wrap">
                        <div class="slide-description">
                            <h3>Category : {{$category->title}}</h3>



                        </div>
                    </div>
                   <img class="banner" src="{{asset('frontEnd/')}}/images/temp-images/slider-image.jpg" alt="15421 Southwest 39th Terrace">
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
                            {!! Form::open(['method' => 'POST', 'action' => 'SearchController@search']) !!}


                            <div class="option-bar large">
                                <label for="location">
                                    Location		</label>
                                <span class="selectwrap">
                                            <select name="location" id="select-status" class="search-select">
                                                @if(count($regions) > 0)
                                                    @foreach($regions as $region)
                                                        <option value="{{$region->id}}">{{$region->region}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                    </span>
                            </div>
                            <div class="option-bar large">
                                <label for="select-status">
                                    Property Category	</label>
                                <span class="selectwrap">
                                        <select name="category" id="select-status" class="search-select">


                                            @if($categories)
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </span>
                            </div>
                            <div class="option-bar large">
                                <label for="select-status">
                                    Property Type	</label>
                                <span class="selectwrap">
                                        <select name="type" id="select-status" class="search-select">


                                            @if($types)
                                                @foreach($types as $type)
                                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar small">
                                <label for="select-bedrooms">
                                    Min Beds	</label>
                                <span class="selectwrap">
                                        <select name="bedrooms" id="select-bedrooms" class="search-select">
                                            <option value="0" selected="selected">Any</option>
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
                                            <option value="0" selected="selected">Any</option>
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
                            <div class="option-bar small price-for-others">
                                <label for="select-min-price">
                                    Min Price	</label>
                                <span class="selectwrap">
                                        <select name="min_price" id="select-min-price" class="search-select">
                                            <option value="1000" selected="selected">Any</option>
                                            <option value="5000">5,000 Tk</option>
                                            <option value="10000">10,000 Tk</option>
                                            <option value="15000">15,000 Tk</option>
                                            <option value="20000">20,000 Tk</option>
                                            <option value="30000">30,000 Tk</option>
                                            <option value="40000">40,000 Tk</option>
                                            <option value="50000">50,000 Tk</option>
                                            <option value="60000">60,000 Tk</option>
                                            <option value="70000">70,000 Tk</option>
                                            <option value="80000">80,000 Tk</option>
                                        </select>
                                    </span>
                            </div>

                            <div class="option-bar small price-for-others">
                                <label for="select-max-price">
                                    Max Price	</label>
                                <span class="selectwrap">
                                    <select name="max_price" id="select-max-price" class="search-select">
                                        <option value="70000" selected="selected">Any</option>
                                        <option value="10000">10,000 Tk</option>
                                        <option value="15000">15,000 Tk</option>
                                        <option value="20000">20,000 Tk</option>
                                        <option value="30000">30,000 Tk</option>
                                        <option value="40000">40,000 Tk</option>
                                        <option value="50000">50,000 Tk</option>
                                        <option value="60000">60,000 Tk</option>
                                        <option value="70000">70,000 Tk</option>
                                        <option value="80000">80,000 Tk</option>
                                        <option value="90000">90,000 Tk</option>
                                        <option value="100000">100,000 Tk</option>
                                        <option value="120000">120,000 Tk</option>
                                        <option value="150000">150,000 Tk</option>
                                    </select>
                                    </span>
                            </div>

                            <div class="option-bar small price-for-others">
                                <label for="select-max-price">
                                    Min Area (sqf)	</label>
                                <span class="selectwrap">
                                    <select name="min_area" id="select-max-area" class="search-select">
                                        <option value="0" selected="selected">Any</option>
                                        <option value="1200">1200 sqf</option>
                                        <option value="1500">1500 sqf</option>
                                        <option value="1800">1800 sqf</option>
                                        <option value="2000">2000 sqf</option>
                                        <option value="2200">2200 sqf</option>
                                        <option value="2500">2500 sqf</option>
                                        <option value="3000">3000 sqf</option>
                                        <option value="3500">3500 sqf</option>
                                        <option value="4000">4000 sqf</option>
                                        <option value="4500">4500 sqf</option>
                                        <option value="5000">5000 sqf</option>
                                        <option value="6000">6000 sqf</option>
                                    </select>
                                    </span>
                            </div>


                            <div class="option-bar">
                                <input type="submit" value="Search" class="real-btn btn">
                            </div>	<div class="clearfix"></div>




                            {!! Form::close() !!}
                        </div>
                    </section>
                    {{--  ====== Home Property--}}
                    <section id="home-properties-section" class="property-items ajax-pagination">
                        @if(count($posts) > 0)
                        <div class="narrative">
                            <h2>All posts</h2><p></p></div>	<div id="home-properties-section-wrapper">
                            <div id="home-properties-section-inner">
                                <div id="home-properties-wrapper">

                                    <div id="home-properties" class="property-items-container clearfix">



                                            @foreach($posts as $post)

                                                <div class="span6 ">
                                                    <article class="property-item clearfix">
                                                        <h4><a href="{{route('user.singleView',['id'=> $post->id])}}">{{$post->title}}</a></h4>

                                                        <figure>

                                                            <a href="property.html">

                                                                <img src="{{url('postimages',$post->image)}}" alt="Property Image">


                                                                {{--                                                        <img src="{{asset('frontEnd/')}}/images/temp-images/property1.jpg" alt="Property Image">--}}
                                                            </a>




                                                            <figcaption class="for-rent">For {{$post->type->title}}</figcaption>
                                                        </figure>

                                                        <div class="detail">
                                                            <h5 class="price">
                                                                {{$post->price}} {{$post->type->title == 'Rent' ? "Tk. Per Month": "Tk."}}<small></small>            </h5>
                                                            <p>{{str_limit($post->description, 100)}}&hellip;</p>
                                                            <a class="more-details" href="{{route('user.singleView',['id'=> $post->id])}}">More Details <i class="fa fa-caret-right"></i></a>
                                                        </div>

                                                        <div class="property-meta">
                                                            <span>{{$post->area}}&nbsp;sq ft</span>
                                                            <span>{{$post->bedroom}}&nbsp;Bedrooms</span>
                                                            <span>{{$post->bathroom}}&nbsp;Bathrooms</span>
                                                            <span>{{$post->garage}}&nbsp;Garages</span>
                                                            <span>{{$post->floor}}&nbsp;Floor</span>
                                                        </div>
                                                        <div class="property-meta">
                                                            <span>Address : {{$post->address}}</span>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach


                                    </div><!-- end of #home-properties -->

                                </div><!-- end of #home-properties-wrapper -->




                            </div><!-- end of #home-properties-section-inner -->

                        </div><!-- end of #home-properties-section-wrapper -->
                        @else
                            <h2>No post</h2>

                        @endif

                    </section>

                    {{--  ====== Home Property--}}

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->

        </div><!-- End row -->

    </div>
    <!-- End content -->
    {{--Start patners--}}


    {{--End patners--}}

@stop
