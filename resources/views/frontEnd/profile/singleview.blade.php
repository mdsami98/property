
@extends('layouts.frontend')

@section('content')

    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url({{asset('frontEnd/')}}/images/temp-images/banner.jpg); background-size: cover; ">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>{{$profile->user->name}}</span></h1>
                <p><a href="{{route('user.home')}}">Home</a></p>
            </div>
        </div>
    </div><!-- End Page Head -->



    @if($profile)
        <div class="container contents listing-grid-layout">

            <div class="row">

                <div class="span9 main-wrap">

                    <!-- Main Content -->
                    <div class="main">

                        <section class="listing-layout">


                            <div class="list-container">
                                <article class="about-agent clearfix">
                                    <h4><a href="#"></a></h4>

                                    <div class="row-fluid">

                                        <div class="span3">
                                            <figure class="agent-pic">
                                                <a href="#">
                                                    <img src="{{url('profileImage' ,$profile->image)}}" alt="author">
                                                </a>
                                            </figure>

                                        </div>

                                        <div class="span9">

                                            <div class="agent-content about">
                                                <h4>About {{$profile->user->name}}</h4>
                                                <p>
                                                    {{$profile->about_text}}
                                                </p>

                                            </div>

                                            <ul class="contacts-list">
                                                <h4>Phone : {{$profile->phone_no}}</h4>

                                            </ul>
                                            <ul class="contacts-list">
                                                <h4>Email : {{$profile->user->email}}</h4>

                                            </ul>

                                            <ul class="contacts-list">


                                                <li>Address :
                                                        {{$profile->address}}


                                            </ul>

                                        </div>

                                    </div><!-- end of .row-fluid -->

                                    <div class="follow-agent clearfix">
                                    {{--                                    <a class="real-btn btn" href="{{route('profile.edit', $profile->id)}}"></a>--}}
                                    <!-- Agent's Social Navigation -->
                                        <ul class="social_networks clearfix">
                                            <li class="facebook">
                                                <a target="_blank" href="#facebook"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>

                                        </ul>
                                    </div>

                                </article>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container contents listing-grid-layout">

        <div class="row">

            <div class="span12 main-wrap">
                <section id="home-properties-section" class="property-items ajax-pagination">

                    <div class="narrative">
                        <h2>Other posts by {{$profile->user->name}}</h2><p>Look at our Latest listed properties and check out the facilities on them, We have already sold more than 5,000 Homes and we are still going at very good pace. We would love you to look into these properties and we hope that you will find something match-able to your needs.</p></div>	<div id="home-properties-section-wrapper">
                        <div id="home-properties-section-inner">
                            <div id="home-properties-wrapper">

                                <div id="home-properties" class="property-items-container clearfix">

                                    @if($posts)

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

                            {{--                                {{$posts->render()}}--}}


                        </div><!-- end of #home-properties-section-inner -->

                    </div><!-- end of #home-properties-section-wrapper -->

                </section>
            </div>
        </div>
    </div>






@stop
