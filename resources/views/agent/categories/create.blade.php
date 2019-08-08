@extends('layouts.agent')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('agent.home')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('agent.category.index')}}">All category</a>
                <span class="breadcrumb-item active">Add Category</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            {!! Form::open(['method' => 'POST', 'action' => 'AgentCategoryController@store']) !!}
                                <div class="wd-400">
                                    <div class="d-flex mg-b-20">
                                        <div class="form-group mg-b-0">
                                            <label id="name">Category Name: <span class="tx-danger">*</span></label>
                                            <input id="name" type="text" name="title" class="form-control wd-300" placeholder="Enter Category Name" required>
                                        </div><!-- form-group -->

                                    </div><!-- d-flex -->
                                    <div class="d-flex mg-b-10">
                                        <span class="text-danger">
                                            {{$errors->has('title') ? $errors->first('title') : ''}}
                                        </span>
                                    </div>

                                    <button type="submit" class="btn btn-info">Add Category</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

