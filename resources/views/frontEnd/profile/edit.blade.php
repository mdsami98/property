@extends('layouts.frontend')

@section('content')

    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url({{asset('frontEnd/')}}/images/temp-images/banner.jpg); background-size: cover; ">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>Agents Listing</span></h1>
                <p>View List of All Real Homes Agents</p>
            </div>
        </div>
    </div><!-- End Page Head -->




        <div class="container contents listing-grid-layout">

            <div class="row">

                <div class="span9 main-wrap">

                    <!-- Main Content -->
                    <div class="main">

                        <section class="listing-layout">
                            <h3 class="title-heading">Hello!! {{Auth::user()->name}} Create Your Profile</h3>


                            <div class="list-container">

                                {!! Form::model($profile, ['route' => ['profile.update', $profile->id],'enctype' => 'multipart/form-data', 'method' => 'PATCH']) !!}
                                <div class="option-bar large">
                                    {!! Form::label('phone_no', 'Phone Number:') !!}

                                    {!! Form::text('phone_no',null, ['class' => '', 'placeholder' => '']) !!}

                                    <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('address') ? $errors->first('address') : ''}}
                                </span>
                                    </div>
                                </div>

                                <div class="option-bar large">
                                    {!! Form::label('address', 'Address:') !!}

                                    {!! Form::text('address',null, ['class' => '', 'placeholder' => '']) !!}

                                    <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('address') ? $errors->first('address') : ''}}
                                </span>
                                    </div>
                                </div>
                                <div class="option-bar large">
                                    {!! Form::label('about_text', 'About yourself:') !!}

                                    {!! Form::textarea('about_text',null, ['class' => '', 'placeholder' => '']) !!}
                                </div>
                                <div class="option-bar large">
                                    {!! Form::label('image', 'Upload profile image:') !!}
                                    {!! Form::file('image',null, ['class' => 'form-control', 'placeholder' => '']) !!}
                                </div>
                                <br>
                                <br>



                                <button type="submit" class="real-btn btn">Save</button>




                                {!! Form::close() !!}
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>




@stop

