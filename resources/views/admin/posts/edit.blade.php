@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.post.index')}}">All post</a>
                <span class="breadcrumb-item active">Add Post</span>

            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    {!! Form::model($post, ['route' => ['admin.post.update', $post->id],'enctype' => 'multipart/form-data', 'method' => 'PATCH']) !!}
                    <div class="row">
                        <div class="col">
                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('phn_number', 'Post title:') !!}<span class="tx-danger">*</span>
                                    {!! Form::text('title', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Post title', 'require']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('title') ? $errors->first('title') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('category_id', 'Select category:') !!}<span class="tx-danger">*</span>

                                    {!! Form::select('category_id',array(0 =>'Choose Category') + $category,null, ['class' => 'form-control wd-300']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('category_id') ? $errors->first('category_id') : ''}}
                                </span>
                            </div>
                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('type_id', 'Select Type:') !!}<span class="tx-danger">*</span>

                                    {!! Form::select('type_id',array(0 =>'Choose Type') + $type,null, ['class' => 'form-control wd-300']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('type_id') ? $errors->first('type_id') : ''}}
                                </span>
                            </div>


                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('area', 'Total Area(Sq Ft):') !!}<span class="tx-danger">*</span>
                                    {!! Form::number('area', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Area( sqrt)']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('area') ? $errors->first('area') : ''}}
                                </span>
                            </div>
                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('price', 'Price:') !!}<span class="tx-danger">*</span>
                                    {!! Form::number('price', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Price (Tk.)']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('price') ? $errors->first('price') : ''}}
                                </span>
                            </div>
                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('phn_number', 'Phone Number:') !!}<span class="tx-danger">*</span>
                                    {!! Form::text('phn_number', $value = null, ['class' => 'form-control wd-300', 'placeholder' => '+8801XXXXXXXXXX']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('price') ? $errors->first('price') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('bedroom', 'Total Bedrooms:') !!}<span class="tx-danger">*</span>
                                    {!! Form::number('bedroom', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Number of Bedroom']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('bedroom') ? $errors->first('bedroom') : ''}}
                                </span>
                            </div>


                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('bathroom', 'Total Bathrooms:') !!}<span class="tx-danger">*</span>
                                    {!! Form::number('bathroom', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Number of Bathroom']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('bathroom') ? $errors->first('bathroom') : ''}}
                                </span>
                            </div>

                        </div>
                        {{--                        End row--}}
                        <div class="col">



                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('garage', 'Total Garage:') !!}
                                    {!! Form::number('garage', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Number of Garage']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->

                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('garage') ? $errors->first('garage') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('floor', 'which Floor:') !!}
                                    {!! Form::text('floor', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'e.g 4th']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('floor') ? $errors->first('floor') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('region', 'Select Type:') !!}<span class="tx-danger">*</span>

                                    {!! Form::select('region',array(0 =>'Choose Region') + $region,null, ['class' => 'form-control wd-300']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('region') ? $errors->first('region') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('region_area', 'City:') !!}
                                    {!! Form::text('region_area', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Address']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('region_area') ? $errors->first('region_area') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('address', 'Address:') !!}
                                    {!! Form::text('address', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Address']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('address') ? $errors->first('address') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('publication_status', 'Select status:', ['class' => 'col-lg-6 control-label']) !!}
                                    {!!  Form::select('publication_status', ['0' => 'Unpublished', '1' => 'Published'],null,['class' => 'form-control wd-300' ]) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('post_type', 'Select Post type:') !!}<span class="tx-danger">*</span>

                                    {!! Form::select('post_type',array(0 =>'Normal', 1=> 'Premium'),null, ['class' => 'form-control wd-300']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->


                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('image', 'Upload image:') !!}
                                    <input type="file" name="image" class="form-control" multiple="multiple">
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('image') ? "The post Image Field Is requerd" : ''}}
                                </span>
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('description', 'Description:') !!}<span class="tx-danger">*</span>
                                    {!! Form::textarea('description', $value = null, ['class' => 'form-control wd-900', 'placeholder' => 'Description']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('description') ? $errors->first('description') : ''}}
                                </span>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Update post</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@stop


