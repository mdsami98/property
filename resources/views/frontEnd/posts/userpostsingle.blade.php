@extends('layouts.frontend')

@section('content')
    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url({{asset('frontEnd/')}}/images/temp-images/banner.jpg); background-size: cover;">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>{{$post->title}}</span></h1>
                <div class="page-breadcrumbs">
                    <nav class="property-breadcrumbs">
                        <ul>
                            <li><a href="{{route('user.home')}}">Home</a><i class="breadcrumbs-separator fa fa-angle-right"></i></li>
                            <li><a href="property.html"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- End Page Head -->

    <div class="container contents detail">
        <div class="row">
            <div class="span9 main-wrap">

                <!-- Main Content -->
                <div class="main">

                    <div id="overview">
                        <div id="property-detail-flexslider" class="clearfix">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{url('postimages',$post->image)}}">
                                        <a href="{{url('postimages',$post->image)}}" class="swipebox" rel="gallery_real_homes">
                                            <img src="{{url('postimages',$post->image)}}" alt="interior one" />
                                        </a>
                                    </li>

                                    @if($postImages)
                                        @foreach($postImages as $postImage)
                                            <li data-thumb="{{url('postimages',$postImage->image)}}">
                                                <a href="{{url('postimages',$postImage->image)}}" class="swipebox" rel="gallery_real_homes">
                                                    <img src="{{url('postimages',$postImage->image)}}" alt="interior one" />
                                                </a>
                                            </li>
                                        @endforeach

                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div id="property-featured-image" class="clearfix only-for-print">
                            <img src="images/temp-images/property5.jpg" alt="15421 Southwest 39th Terrace" />
                        </div>
                        <article class="property-item clearfix">
                            <div class="wrap clearfix">
                                <h4 class="title"> Property ID : {{$post->id}} </h4>
                                <h5 class="price">
                                    <span class="status-label"> For {{$post->type->title}}           </span>
                                    <span>
                                    {{$post->price}}{{$post->type->title == 'Rent' ? "Tk. Per Month": "Tk."}}<small> - {{$post->category->title}}</small>
                                </span>
                                </h5>
                            </div>



                            <div class="property-meta clearfix">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                        <path class="path" d="M14 7.001H2.999C1.342 7 0 8.3 0 10v11c0 1.7 1.3 3 3 3H14c1.656 0 3-1.342 3-3V10 C17 8.3 15.7 7 14 7.001z M14.998 21c0 0.551-0.447 1-0.998 1.002H2.999C2.448 22 2 21.6 2 21V10 c0.001-0.551 0.449-0.999 1-0.999H14c0.551 0 1 0.4 1 0.999V21z"/>
                        <path class="path" d="M14.266 0.293c-0.395-0.391-1.034-0.391-1.429 0c-0.395 0.39-0.395 1 0 1.415L13.132 2H3.869l0.295-0.292 c0.395-0.391 0.395-1.025 0-1.415c-0.394-0.391-1.034-0.391-1.428 0L0 3l2.736 2.707c0.394 0.4 1 0.4 1.4 0 c0.395-0.391 0.395-1.023 0-1.414L3.869 4.001h9.263l-0.295 0.292c-0.395 0.392-0.395 1 0 1.414s1.034 0.4 1.4 0L17 3 L14.266 0.293z"/>
                        <path class="path" d="M18.293 9.734c-0.391 0.395-0.391 1 0 1.429s1.023 0.4 1.4 0L20 10.868v9.263l-0.292-0.295 c-0.392-0.395-1.024-0.395-1.415 0s-0.391 1 0 1.428L21 24l2.707-2.736c0.391-0.394 0.391-1.033 0-1.428s-1.023-0.395-1.414 0 l-0.292 0.295v-9.263l0.292 0.295c0.392 0.4 1 0.4 1.4 0s0.391-1.034 0-1.429L21 7L18.293 9.734z"/>
                        </svg>
                        {{$post->area}}&nbsp;Sq Ft</span>

                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <circle class="circle" cx="5" cy="8.3" r="2.2"/>
                                <path class="path" d="M0 22.999C0 23.6 0.4 24 1 24S2 23.6 2 22.999V18H2h20h0.001v4.999c0 0.6 0.4 1 1 1 C23.552 24 24 23.6 24 22.999V10C24 9.4 23.6 9 23 9C22.447 9 22 9.4 22 10v1H22h-0.999V10.5 C20.999 8 20 6 17.5 6H11C9.769 6.1 8.2 6.3 8 8v3H2H2V9C2 8.4 1.6 8 1 8S0 8.4 0 9V22.999z M10.021 8.2 C10.19 8.1 10.6 8 11 8h5.5c1.382 0 2.496-0.214 2.5 2.501v0.499h-9L10.021 8.174z M22 16H2v-2.999h20V16z"/>
                                </svg>
                                {{$post->bedroom}}&nbsp;Bedrooms
                                </span>

                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path class="path" d="M23.001 12h-1.513C21.805 11.6 22 11.1 22 10.5C22 9.1 20.9 8 19.5 8S17 9.1 17 10.5 c0 0.6 0.2 1.1 0.5 1.5H2.999c0-0.001 0-0.002 0-0.002V2.983V2.98c0.084-0.169-0.083-0.979 1-0.981h0.006 C4.008 2 4.3 2 4.5 2.104L4.292 2.292c-0.39 0.392-0.39 1 0 1.415c0.391 0.4 1 0.4 1.4 0l2-1.999 c0.39-0.391 0.39-1.025 0-1.415c-0.391-0.391-1.023-0.391-1.415 0L5.866 0.72C5.775 0.6 5.7 0.5 5.5 0.4 C4.776 0 4.1 0 4 0H3.984v0.001C1.195 0 1 2.7 1 2.98v0.019v0.032v8.967c0 0 0 0 0 0.002H0.999 C0.447 12 0 12.4 0 12.999S0.447 14 1 14H1v2.001c0.001 2.6 1.7 4.8 4 5.649V23c0 0.6 0.4 1 1 1s1-0.447 1-1v-1h10v1 c0 0.6 0.4 1 1 1s1-0.447 1-1v-1.102c2.745-0.533 3.996-3.222 4-5.897V14h0.001C23.554 14 24 13.6 24 13 S23.554 12 23 12z M21.001 16.001c-0.091 2.539-0.927 3.97-3.001 3.997H7c-2.208-0.004-3.996-1.79-4-3.997V14h15.173 c-0.379 0.484-0.813 0.934-1.174 1.003c-0.54 0.104-0.999 0.446-0.999 1c0 0.6 0.4 1 1 1 c2.159-0.188 3.188-2.006 3.639-2.999h0.363V16.001z"/>
                                <rect class="rect" x="6.6" y="4.1" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 15.6319 3.2336)" width="1" height="1.4"/>
                                <rect class="rect" x="9.4" y="2.4" transform="matrix(0.7066 0.7076 -0.7076 0.7066 4.9969 -6.342)" width="1.4" height="1"/>
                                <rect class="rect" x="9.4" y="6.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 7.8179 -5.167)" width="1.4" height="1"/>
                                <rect class="rect" x="12.4" y="4.4" transform="matrix(0.7069 0.7073 -0.7073 0.7069 7.2858 -7.8754)" width="1.4" height="1"/>
                                <rect class="rect" x="13.4" y="7.4" transform="matrix(-0.7064 -0.7078 0.7078 -0.7064 18.5823 23.4137)" width="1.4" height="1"/>
                                </svg>
                                {{$post->bathroom}}&nbsp;Bathrooms</span>

                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <path class="path" d="M23.958 0.885c-0.175-0.64-0.835-1.016-1.475-0.842l-11 3.001c-0.64 0.173-1.016 0.833-0.842 1.5 c0.175 0.6 0.8 1 1.5 0.842L16 4.299V6.2h-0.001H13c-2.867 0-4.892 1.792-5.664 2.891L5.93 11.2H5.024 c-0.588-0.029-2.517-0.02-3.851 1.221C0.405 13.1 0 14.1 0 15.201V18.2v2H2h2.02C4.126 22.3 5.9 24 8 24 c2.136 0 3.873-1.688 3.979-3.801H16V24h2V3.754l5.116-1.396C23.756 2.2 24.1 1.5 24 0.885z M8 22 c-1.104 0-2-0.896-2-2.001s0.896-2 2-2S10 18.9 10 20S9.105 22 8 22.001z M11.553 18.2C10.891 16.9 9.6 16 8 16 c-1.556 0-2.892 0.901-3.553 2.201H2v-2.999c0-0.599 0.218-1.019 0.537-1.315C3.398 13.1 5 13.2 5 13.2h2L9 10.2 c0 0 1.407-1.999 4-1.999h2.999H16v10H11.553z"/>
                                </svg>
                                {{$post->garage}}&nbsp;Garages</span>
                                @if($post->user_id == Auth::user()->id)

                                  <span class="add-to-fav">


                                        @if($post->publication_status == 0)
                                        <p class="text-danger">Unpublished</p>
                                            @else
                                            <p class="text-success">Published</p>
                                        @endif



                                   </span>

                                @endif

                                     <span class="printer-icon"><a href="javascript:window.print()"><i class="fa fa-print"></i>Print</a></span>
                            </div>

                            @if($post->user_id == Auth::user()->id)
                            <div class="my-property-delete">



                            {!! Form::open(['method' => 'DELETE', 'action' => ['UserPostController@destroy', $post->id]]) !!}

                            {!! Form::submit('Delete Post' , ['class' => 'real-btn btn']) !!}

                            {!! Form::close()  !!}

                                <a href="{{route('post.edit', $post->id)}}" class="real-btn btn">Esit post</a>

                                <a href="" class="real-btn btn">Add image</a>
                            </div>



                            @endif

                            <div class="content clearfix">
                                <h4 class="adittional-title">Description</h4>

                                <p>{{$post->description}}</p>

                            </div>


                        </article>

                        <div class="map-wrap clearfix">
                            <span class="map-label">Property Map</span>
                            <div id="property_map"></div>

                            <div class="share-networks clearfix">
                                <span class="share-label">Share this</span>
                                <span><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://realhomes.inspirythemes.biz/property/15421-southwest-39th-terrace/"><i class="fa fa-facebook fa-lg"></i>Facebook</a></span>
                                <span><a target="_blank" href="https://twitter.com/share?url=http://realhomes.inspirythemes.biz/property/15421-southwest-39th-terrace/" ><i class="fa fa-twitter fa-lg"></i>Twitter</a></span>
                                <span><a target="_blank" href="https://plus.google.com/share?url={http://realhomes.inspirythemes.biz/property/15421-southwest-39th-terrace/}" onclick="javascript:window.open(this.href,  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes')"><i class="fa fa-google-plus fa-lg"></i>Google</a></span>
                            </div>

                        </div>

                        <div class="agent-detail clearfix">

                            <div class="left-box">
                                <h3>{{$post->user->name}}</h3>

                                <figure>
                                    <a href="">

                                        @if($post->user->profile->image)
                                            <img src="{{url('profileImage',$post->user->profile->image)}}" alt="Agent">
                                        @endif
                                    </a>
                                </figure>
                                <ul class="contacts-list">
                                    <li class="office">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" d="M5.597 1.999C6.4 2 8 2 8.1 5.51C8.017 6.1 7.8 6.3 7.5 6.658C7.12 7.1 6.4 7.9 6.4 9.2 c0 1.5 1 3.1 3.1 5.198c1.143 1.2 3.3 3.1 4.8 3.123c1.222 0 1.856-0.836 2.128-1.192 c0.18-0.236 0.284-0.373 0.862-0.468h0.055c3.91 0 4.6 0.8 4.6 2.476c0 0.358-0.151 1.891-0.893 2.8 c-0.297 0.382-1.161 0.789-2.695 0.789c-3.012 0-7.658-1.598-11.249-5.162C2.085 11.7 2 4.7 2 4.6 C2.021 2.2 4.8 2 5.6 2 M5.598-0.001c-0.385 0-5.578 0.084-5.578 4.624c0 0-0.041 7.8 5.8 13.6 c3.825 3.8 8.9 5.7 12.7 5.747c1.914 0 3.46-0.515 4.273-1.56c1.314-1.688 1.314-4.07 1.314-4.07 c0-4.618-4.734-4.47-6.801-4.476c-2.345 0.324-2.198 1.66-2.843 1.66c-0.187 0-1.32-0.393-3.409-2.523 c-2.106-2.085-2.527-3.234-2.527-3.797c0-1.265 1.396-1.328 1.662-3.602c-0.004-1.028-0.011-5.563-4.482-5.632 C5.621-0.001 5.613-0.001 5.598-0.001L5.598-0.001z"/>
</svg>
                                        Office : 041-456-3692
                                    </li>
                                    <li class="mobile">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" fill-rule="evenodd" clip-rule="evenodd" d="M18 24c1.657 0 2.999-1.341 3-2.999V2.999C20.999 1.3 19.7 0 18 0H6.001 C4.343 0 3 1.3 3 2.999v18.002C3.001 22.7 4.3 24 6 24H18z M6.001 22.001c-0.553 0-1-0.448-1.001-1V2.999 C5.001 2.4 5.4 2 6 2h9C15.552 2 16 2.4 16 2.999v18.002c-0.002 0.552-0.448 1-0.999 1H6.001z M19 21 c-0.001 0.552-0.447 1-1 1h-0.184c0.111-0.314 0.184-0.647 0.184-1V2.999C18 2.6 17.9 2.3 17.8 2H18 c0.553 0 1 0.4 1 0.999V21.001z"/>
                                            <circle class="circle" fill-rule="evenodd" clip-rule="evenodd" cx="10.5" cy="19.5" r="1.5"/>
                                            <path class="path" fill-rule="evenodd" clip-rule="evenodd" d="M12 2.999H8.999C8.447 3 8 3.4 8 4c0 0.6 0.4 1 1 1H12 c0.552 0 1-0.448 1-1C13 3.4 12.6 3 12 2.999z"/>
</svg>
                                        Mobile : {{$post->user->profile->phone_no}}
                                    </li>
                                    <li class="fax">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<g>
    <path class="path" d="M14.415 0H6v10h1h11V3.585L14.415 0z M16 8H8V2h5.586L16 4.413V8z"/>
    <path class="path" d="M15.001 14.001H8.999C7.343 14 6 15.3 6 17v7h1c0.469 0 0.9 0 2 0h6.002c1.104 0 1.6 0 2 0h1v-7 C18 15.3 16.7 14 15 14.001z M16 22c-0.264 0-0.586 0-0.999 0H8.999c-0.417 0-0.737 0-1 0v-5 c0.001-0.552 0.449-0.998 1-1h6.002c0.55 0 1 0.4 1 1V22z"/>
</g>
                                            <g>
                                                <path class="path" d="M7 18H3.001c-0.917-0.029-0.844-0.142-0.855-0.146C2.067 17.8 2 17.1 2 16v-6c0.029-1.481 0.922-1.894 3.001-2H7V6 H5.001C2.66 6 0 7.1 0 10v6c0.02 1.111-0.047 1.9 0.4 2.803c0.499 0.9 1.6 1.2 2.6 1.197H7V18z"/>
                                                <path class="path" d="M19.001 6H17v2h1.999c2.078 0.1 3 0.5 3 2v6c0.02 1.098-0.067 1.78-0.146 1.9 c-0.011 0 0.1 0.116-0.855 0.146H17v2h3.999c1.046 0 2.117-0.255 2.616-1.197C24.048 17.9 24 17.1 24 16v-6 C23.995 7.1 21.3 6 19 6z"/>
                                            </g>
                                            <polygon class="path" fill-rule="evenodd" clip-rule="evenodd" points="18,4.4 13.6,4.4 13.6,0 13.6,0 18,4.4 18,4.4"/>
                                            <path class="path" d="M20.499 17c-0.275 0-0.5-0.224-0.5-0.5v-0.999c0-0.276 0.225-0.5 0.5-0.5c0.277 0 0.5 0.2 0.5 0.5V16.5 C21.001 16.8 20.8 17 20.5 17L20.499 17z M4 11C3.292 11 3 10.7 3 10C3 9.2 3.3 9 4 8.999c0.77 0 1 0.2 1 1 C5 10.7 4.8 11 4 11L4 11z"/>
</svg>
                                        Fax : 041-789-4561
                                    </li>
                                </ul>
                                <p>Lorem agent info ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna&hellip;<br/><a class="real-btn" href="#">Know More</a></p>
                            </div>

                            <div class="contact-form">
                                <h3>Contact</h3>
                                <form id="agent-single-form" class="agent-form contact-form-small" method="post" action="http://html.inspirydemos.com/realhomes-html/agent_form_handler.php">
                                    <input type="text" name="name" placeholder="Name" class="required" title="* Please provide your name">
                                    <input type="text" name="email" placeholder="Email" class="email required" title="* Please provide valid email address">
                                    <textarea name="message" class="required" placeholder="Message" title="* Please provide your message"></textarea>

                                    <input type="hidden" name="action" value="send_message_to_agent"/>
                                    <input type="hidden" name="property_title" value="15421 Southwest 39th Terrace"/>
                                    <input type="hidden" name="property_permalink" value="http://realhomes.inspirythemes.biz/property/15421-southwest-39th-terrace/"/>
                                    <input type="submit" value="Send Message" name="submit" class="submit-button real-btn">
                                    <img src="images/ajax-loader.gif" id="ajax-loader" alt="Loading...">
                                    <div class="clearfix form-separator"></div>
                                    <div id="error-container"></div>
                                    <div id="message-container"></div>
                                </form>
                            </div>


                        </div>







                    </div>

                </div><!-- End Main Content -->


            </div>
            <div class="span3 sidebar-wrap">

                <!-- Sidebar -->
                <aside class="sidebar">
                    <section class="widget advance-search">
                        <h4 class="title search-heading">Find Your Home<i class="fa fa-search"></i></h4>
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

                            <div class="option-bar large">
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
                            <div class="option-bar large">
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
                            </div><div class="option-bar large price-for-others">
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

                            <div class="option-bar large price-for-others">
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

                            <div class="option-bar large price-for-others">
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

                </aside><!-- End Sidebar -->

            </div>




        </div>

        <div class="row">
            <div class="span9">

                @if(Auth::check())
                    <div class="well">


                        {!! Form::open(['method' => 'POST', 'action' => 'PostCommentController@createReply']) !!}

                        <input type="hidden" name="post_id" value="{{$post->id}}">

                        {!! Form::label('commentBody', 'Type Tour Comment:') !!}

                        {!! Form::textarea('commentBody',null, ['class' => 'form-control wd-500']) !!}
                        <br>

                        <input type="submit" value="Submit" class="real-btn btn">
                        {!! Form::close() !!}
                    </div>

                @endif

                @if(count($comments) > 0)

                    @foreach($comments  as $comment)

                        <div class="media">
                            <a class="pull-left" href="#">
                                <img height="64px" class="media-object" src="{{url('profileImage',$comment->authorImage)}}" alt="">
                            </a>
                            <div class="media-body">
                                <div class="comment-box">
                                    <h4 class="media-heading">{{$comment->author}}
                                        <small>{{$comment->created_at->format('l j F Y H:i:s')}}</small>
                                    </h4>
                                    <p>{{$comment->commentBody}}</p>
                                    <button class="toggle-reply pull-right btn btn-info">Reply</button>

                                    <div class="reply-box">
                                        {!! Form::open(['method' => 'POST', 'action' => 'CommentRepliesController@createReply']) !!}

                                        <input type="hidden" name="comment_id" value="{{$comment->id}}">

                                        {!! Form::label('commentBody', 'Type Tour Comment:') !!}

                                        {!! Form::textarea('commentBody',null, ['class' => 'form-control wd-500', 'rows'=>1]) !!}
                                        <br>

                                        <input type="submit" value="Submit" class="real-btn btn">
                                        {!! Form::close() !!}
                                    </div>

                                </div>

                                <!-- Nested Comment -->


                                @if(count($comment->replies) > 0)

                                    @foreach($comment->replies as $reply)

                                        <div class="media nested-reply">
                                            <a class="pull-left" href="#">
                                                <img class="media-object" src="{{url('profileImage',$reply->authorImage)}}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{$reply->author}}
                                                    <small>{{$reply->created_at->format('l j F Y H:i:s')}}</small>
                                                </h4>
                                                {{$reply->commentBody}}
                                            </div>
                                        </div>

                                @endforeach

                            @endif



                            <!-- End Nested Comment -->
                            </div>
                        </div>

                    @endforeach

                @endif

                <hr>
            </div>
        </div>
    </div>
@stop

@section('custom_script')

    <script>

        $(".media-body .toggle-reply").click(function () {

            $(this).next().slideToggle("slow");

        });

    </script>

@stop
