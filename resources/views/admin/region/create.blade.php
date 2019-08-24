@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.region.index')}}">All region</a>
                <span class="breadcrumb-item active">Add new region</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            {!! Form::open(['method' => 'POST', 'action' => 'RegionController@store']) !!}
                                <div class="wd-400">
                                    <div class="d-flex mg-b-20">
                                        <div class="form-group mg-b-0">
                                            {!! Form::label('region', 'Region Name:') !!}<span class="tx-danger">*</span>
                                            {!! Form::text('region', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Region name', 'require']) !!}
                                        </div><!-- form-group -->

                                    </div><!-- d-flex -->
                                    <div class="d-flex mg-b-10">
                                        <span class="text-danger">
                                            {{$errors->has('region') ? $errors->first('region') : ''}}
                                        </span>
                                    </div>

                                    <button type="submit" class="btn btn-info">Add</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

