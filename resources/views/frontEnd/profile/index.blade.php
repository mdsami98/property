@extends('layouts.frontend')

@section('content')

    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url({{asset('frontEnd/')}}/images/temp-images/banner.jpg); background-size: cover; ">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>My profile</span></h1>
                <p>View List of All Real Homes Agents</p>
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
                        <h3 class="title-heading">My Profile</h3>

                        <div class="list-container">
                            <article class="about-agent clearfix">
                                <h4><a href="#">{{Auth::user()->name}}</a></h4>

                                <div class="row-fluid">

                                    <div class="span3">
                                        <figure class="agent-pic">
                                            <a href="#">
                                                <img src="{{url('profileImage' ,$profile->image)}}" alt="author">
                                            </a>
                                        </figure>

                                        {!! Form::open(['method' => 'POST', 'action' => 'ProfileController@addImage','enctype' => 'multipart/form-data']) !!}

                                        <input type="hidden" value="{{$profile->id}}" name="profile_id">
                                        <input type="file" placeholder="change Image" name="image">
                                        <br><br>
                                        <input type="submit" id="login-button" name="submit" value="Change image" class="real-btn login-btn" />


                                        {!! Form::close() !!}
                                    </div>

                                    <div class="span9">

                                        <div class="agent-content about">
                                            <h4>About Myself</h4>
                                            <p>
                                                @if($profile->about_text)
                                                    {{$profile->about_text}}
                                            </p>
                                                    <span><a href="#about-modal" class="pull-right" data-toggle="modal">Edit</a></span>
                                                @else
                                                    <p>
                                                    {{$profile->about_text}}
                                                    </p><span><a href="#about-modal" class="" data-toggle="modal">Click here to Write About yourself</a></span>

                                                @endif




                                        </div>

                                        <ul class="contacts-list">
                                            <li class="office">

                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
<path class="path" fill-rule="evenodd" clip-rule="evenodd" d="M18 24c1.657 0 2.999-1.341 3-2.999V2.999C20.999 1.3 19.7 0 18 0H6.001 C4.343 0 3 1.3 3 2.999v18.002C3.001 22.7 4.3 24 6 24H18z M6.001 22.001c-0.553 0-1-0.448-1.001-1V2.999 C5.001 2.4 5.4 2 6 2h9C15.552 2 16 2.4 16 2.999v18.002c-0.002 0.552-0.448 1-0.999 1H6.001z M19 21 c-0.001 0.552-0.447 1-1 1h-0.184c0.111-0.314 0.184-0.647 0.184-1V2.999C18 2.6 17.9 2.3 17.8 2H18 c0.553 0 1 0.4 1 0.999V21.001z"/>
                                                    <circle class="circle" fill-rule="evenodd" clip-rule="evenodd" cx="10.5" cy="19.5" r="1.5"/>
                                                    <path class="path" fill-rule="evenodd" clip-rule="evenodd" d="M12 2.999H8.999C8.447 3 8 3.4 8 4c0 0.6 0.4 1 1 1H12 c0.552 0 1-0.448 1-1C13 3.4 12.6 3 12 2.999z"/>
</svg>
                                                Mobile : @if($profile->phone_no)
                                                    {{$profile->phone_no}} <span><a href="#phone-modal" class="pull-right" data-toggle="modal">Edit</a></span>
                                                             @else
                                                    {{$profile->phone_no}} <span><a href="#phone-modal" class="pull-right" data-toggle="modal">Add</a></span>

                                                @endif
                                            </li>


                                        </ul>

                                        <ul class="contacts-list">


                                             <li>Address : @if($profile->address)
                                                     {{$profile->address}} <span><a href="#address-modal" class="pull-right" data-toggle="modal">Edit</a></span>
                                                 @else
                                                     {{$profile->address}} <span><a href="#address-modal" class="pull-right" data-toggle="modal">Add Your address</a></span>

                                                 @endif</li>


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


    <div id="phone-modal" class="forms-modal modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <p></p>
        </div>

        <!-- start of modal body -->
        <div class="modal-body">

            <!-- login section -->
            <div class="login-section modal-section">
                <h4>Phone Number</h4>
                {!! Form::open(['method' => 'POST', 'action' => 'ProfileController@addNumber']) !!}
                    <div class="form-option">

                        <input id="username" value="{{$profile->phone_no}}" name="phone_no" type="text" class="required" autofocus required/>
                    </div>
                <input type="hidden" name="profile_id" value="{{$profile->id}}">

                    <input type="submit" id="login-button" name="submit" value="Save" class="real-btn login-btn" />

                    <div>
                        <div id="login-message" class="modal-message"></div>
                        <div id="login-error" class="modal-error"></div>
                    </div>
              {!! Form::close() !!}

                <p>
                    <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ''}}</span>


                </p>

            </div>




        </div>
        <!-- end of modal-body -->

    </div>

{{--    Address Modal--}}
    <div id="address-modal" class="forms-modal modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <p></p>
        </div>

        <!-- start of modal body -->
        <div class="modal-body">

            <!-- login section -->
            <div class="login-section modal-section">
                <h4>Address</h4>
                {!! Form::open(['method' => 'POST', 'action' => 'ProfileController@addAddress']) !!}
                    <div class="form-option">

                        <input id="username" value="{{$profile->address}}" name="address" type="text" class="required" autofocus required/>
                    </div>
                <input type="hidden" name="profile_id" value="{{$profile->id}}">

                    <input type="submit" id="login-button" name="submit" value="Save" class="real-btn login-btn" />

                    <div>
                        <div id="login-message" class="modal-message"></div>
                        <div id="login-error" class="modal-error"></div>
                    </div>
              {!! Form::close() !!}

                <p>
                    <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ''}}</span>


                </p>

            </div>




        </div>
        <!-- end of modal-body -->

    </div>


{{--    Address Modal--}}
    <div id="about-modal" class="forms-modal modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <p></p>
        </div>

        <!-- start of modal body -->
        <div class="modal-body">

            <!-- login section -->
            <div class="login-section modal-section">
                <h4>About Yourself</h4>
                {!! Form::open(['method' => 'POST', 'action' => 'ProfileController@addAbout']) !!}
                    <div class="form-option">


                        <textarea name="about_text" id="" cols="50" rows="10" autofocus>{{$profile->about_text}}</textarea>
                    </div>
                <input type="hidden" name="profile_id" value="{{$profile->id}}">

                    <input type="submit" id="login-button" name="submit" value="Save" class="real-btn login-btn" />

                    <div>
                        <div id="login-message" class="modal-message"></div>
                        <div id="login-error" class="modal-error"></div>
                    </div>
              {!! Form::close() !!}

                <p>
                    <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ''}}</span>


                </p>

            </div>




        </div>
        <!-- end of modal-body -->

    </div>






@stop
