@extends('layouts.frontend')

@section('content')
    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url({{asset('frontEnd/')}}/images/temp-images/banner.jpg); background-size: cover;">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>Hello {{Auth::user()->name}} Add your property </span></h1>
                <div class="page-breadcrumbs">
                    <nav class="property-breadcrumbs">
                        <ul>
                            <li><a href="{{route('user.home')}}">Home</a><i class="breadcrumbs-separator fa fa-angle-right"></i></li>
                            <li><a href="{{route('post.index')}}">My property</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- End Page Head -->

    <div class="container contents detail">
        <div class="row">

            {!! Form::open(['method' => 'POST', 'action' => 'UserPostController@store', 'enctype'=>"multipart/form-data"]) !!}
            <div class="span6 main-wrap">

                <aside class="sidebar">
                    <section class="widget advance-search">

                        <div class="as-form-wrap">

                            <div class="option-bar large">

                                {!! Form::label('title', 'Your property name:') !!} <span class="text-danger">*</span>
                                {!! Form::text('title',null, ['id' => 'keyword-txt', 'placeholder' => 'Ex : My sweet home']) !!}

                                <span class="text-danger">
                                   {{$errors->has('title') ? $errors->first('title') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('category_id', 'Select category:') !!}

                                <span class="selectwrap">
                                {!! Form::select('category_id', $category, null ,['class' => 'search-select', 'id' =>'select-status']) !!}

                                </span>
                                <span class="text-danger">
                                   {{$errors->has('category_id') ? $errors->first('category_id') : ''}}
                                </span>
                            </div>


                            <div class="option-bar large">

                                {!! Form::label('type_id', 'Select Type:') !!}

                                <span class="selectwrap">
                                {!! Form::select('type_id', $type, null ,['class' => 'search-select', 'id' =>'select-status']) !!}

                                </span>
                                <span class="text-danger">
                                   {{$errors->has('type_id') ? $errors->first('type_id') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('area', 'Total area (sqft):') !!} <span class="text-danger">*</span>
                                {!! Form::number('area',null, ['id' => '', 'placeholder' => 'Ex : 1800']) !!}

                                <span class="text-danger">
                                   {{$errors->has('area') ? $errors->first('area') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('price', 'Price (Tk):') !!} <span class="text-danger">*</span>

                                {!! Form::number('price',null,['id' => '', 'placeholder' => 'Ex : 25000']) !!}

                                <span class="text-danger">
                                   {{$errors->has('price') ? $errors->first('price') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('bedroom', 'Number of bedrooms:') !!} <span class="text-danger">*</span>

                                {!! Form::number('bedroom',null,['id' => '', 'placeholder' => 'Ex : 2']) !!}

                                <span class="text-danger">
                                   {{$errors->has('bedroom') ? $errors->first('bedroom') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('bathroom', 'Number of bathrooms:') !!} <span class="text-danger">*</span>

                                {!! Form::number('bathroom',null,['id' => '', 'placeholder' => 'Ex : 2']) !!}

                                <span class="text-danger">
                                   {{$errors->has('bathroom') ? $errors->first('bathroom') : ''}}
                                </span>
                            </div>


                            <div class="option-bar large">

                                {!! Form::label('garage', 'Number of garage:') !!} <span class="text-danger">*</span>
                                {!! Form::number('garage',null, ['id' => '', 'placeholder' => 'Ex : 1']) !!}

                                <span class="text-danger">
                                   {{$errors->has('garage') ? $errors->first('garage') : ''}}
                                </span>
                            </div>
                            <div class="option-bar large">

                                {!! Form::label('floor', 'which Floor:') !!} <span class="text-danger">*</span>
                                {!! Form::number('floor',null, ['id' => '', 'placeholder' => 'Ex : 1']) !!}

                                <span class="text-danger">
                                   {{$errors->has('floor') ? $errors->first('floor') : ''}}
                                </span>
                            </div>






                           	<div class="clearfix"></div>





                        </div>
                    </section>

                </aside><!-- End Sidebar -->



            </div>
            <div class="span6 main-wrap">

                <aside class="sidebar">
                    <section class="widget advance-search">

                        <div class="as-form-wrap">


                            <div class="option-bar large">

                                {!! Form::label('phn_number', 'Contact number:') !!} <span class="text-danger">*</span>
                                {!! Form::number('phn_number',null, ['id' => '', 'placeholder' => 'Ex : 01700000000']) !!}

                                <span class="text-danger">
                                   {{$errors->has('phn_number') ? $errors->first('phn_number') : ''}}
                                </span>
                            </div>




                            <div class="option-bar large">

                                {!! Form::label('region', 'Region:') !!} <span class="text-danger">*</span>

                                {!! Form::select('region', $region, null ,['class' => 'search-select', 'id' =>'select-status']) !!}

                                <span class="text-danger">
                                   {{$errors->has('region') ? $errors->first('region') : ''}}
                                </span>
                            </div>


                            <div class="option-bar large">

                                {!! Form::label('region_area', 'City:') !!} <span class="text-danger">*</span>

                                {!! Form::text('region_area',null,['id' => '', 'placeholder' => 'Ex : Dhaka']) !!}

                                <span class="text-danger">
                                   {{$errors->has('region_area') ? $errors->first('region_area') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('address', 'Address:') !!} <span class="text-danger">*</span>

                                {!! Form::text('address',null,['id' => '', 'placeholder' => 'Ex : Uttara, sector 7, Road 9, House 4']) !!}

                                <span class="text-danger">
                                   {{$errors->has('address') ? $errors->first('address') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('post_type', 'Select Type:') !!}

                                <span class="selectwrap">
                                {!! Form::select('post_type', ['0'=> 'Normal', '1'=>'Premium'], null ,['class' => 'search-select', 'id' =>'select-status']) !!}

                                </span>

                            </div>

                            <div class="option-bar large">

                                {!! Form::label('description', 'Description:') !!}<span class="tx-danger">*</span><br>

                                {!! Form::textarea('description',null,['id' => '', 'placeholder' => 'Ex :']) !!}

                                <span class="text-danger">
                                   {{$errors->has('address') ? $errors->first('address') : ''}}
                                </span>
                            </div>

                            <div class="option-bar large">

                                {!! Form::label('image', 'Upload Image:') !!}<span class="tx-danger">*</span><br>

                                {!! Form::file('image',['id' => '',]) !!}
                                <br>

                                <span class="text-danger">
                                   {{$errors->has('image') ? $errors->first('image') : ''}}
                                </span>
                            </div>
                            <br>
                            <br>

                           <div class="clearfix"></div>





                        </div>
                    </section>

                </aside><!-- End Sidebar -->



            </div>

            <div class="span12">
                <div class="option-bar">
                    <input type="submit" value="Add property" class="real-btn btn">
                </div>
            </div>



            {!! Form::close() !!}




        </div>












    </div>
@stop



