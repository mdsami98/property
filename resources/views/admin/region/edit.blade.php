@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.region.index')}}">All region</a>
                <span class="breadcrumb-item active">Edit region</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            {!! Form::model($region, ['route' => ['admin.region.update', $region->id], 'method' => 'PATCH']) !!}
                                <div class="wd-400">
                                    <div class="d-flex mg-b-20">
                                        <div class="form-group mg-b-0">
                                            {!! Form::label('region', 'Category Name:', ['class' => '']) !!}<span class="tx-danger">*</span></label>
                                            {!! Form::text('region', $value = $region->region, ['class' => 'form-control wd-300']) !!}
                                        </div><!-- form-group -->

                                    </div><!-- d-flex -->
                                    <div class="d-flex mg-b-10">
                                        <span class="text-danger">
                                            {{$errors->has('region') ? $errors->first('region') : ''}}
                                        </span>
                                    </div>

                                    <button type="submit" class="btn btn-info">Edit</button>
                                </div>
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

