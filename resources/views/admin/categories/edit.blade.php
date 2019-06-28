@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index-2.html">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.category.index')}}">All category</a>
                <span class="breadcrumb-item active">Edit Category</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            {!! Form::model($category, ['route' => ['admin.category.update', $category->id], 'method' => 'PATCH']) !!}
                                <div class="wd-400">
                                    <div class="d-flex mg-b-20">
                                        <div class="form-group mg-b-0">
                                            {!! Form::label('title', 'Category Name:', ['class' => '']) !!}<span class="tx-danger">*</span></label>
                                            {!! Form::text('title', $value = $category->title, ['class' => 'form-control wd-300']) !!}
                                        </div><!-- form-group -->

                                    </div><!-- d-flex -->
                                    <div class="d-flex mg-b-10">
                                        <span class="text-danger">
                                            {{$errors->has('title') ? $errors->first('title') : ''}}
                                        </span>
                                    </div>

                                    <button type="submit" class="btn btn-info">Edit Category</button>
                                </div>
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

