@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.type.index')}}">All Type</a>
                <span class="breadcrumb-item active">Edit Type</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            {!! Form::model($type, ['route' => ['admin.type.update', $type->id], 'method' => 'PATCH']) !!}
                                <div class="wd-400">
                                    <div class="d-flex mg-b-20">
                                        <div class="form-group mg-b-0">
                                            {!! Form::label('title', 'Type Name:', ['class' => '']) !!}<span class="tx-danger">*</span></label>
                                            {!! Form::text('title', $value = $type->title, ['class' => 'form-control wd-300']) !!}
                                        </div><!-- form-group -->

                                    </div><!-- d-flex -->
                                    <div class="d-flex mg-b-10">
                                        <span class="text-danger">
                                            {{$errors->has('title') ? $errors->first('title') : ''}}
                                        </span>
                                    </div>

                                    <button type="submit" class="btn btn-info">Edit Type</button>
                                </div>
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

