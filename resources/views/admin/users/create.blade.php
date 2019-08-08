@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <span class="breadcrumb-item active">All Users</span>

            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4 class="text-center mt-2 mb-40 title">Add New User Or Agent</h4>

                            {!! Form::open(['method' => 'POST', 'action' => 'UserController@store']) !!}
                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('name', 'User Name:') !!}<span class="tx-danger">*</span>
                                    {!! Form::text('name', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'Enter User Name']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('name') ? $errors->first('name') : ''}}
                                </span>
                            </div>


                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('email', 'User Email:') !!}<span class="tx-danger">*</span>
                                    {!! Form::email('email', $value = null, ['class' => 'form-control wd-300', 'placeholder' => 'User Email']) !!}
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('email') ? $errors->first('email') : ''}}
                                </span>
                            </div>
                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('password', 'Password:') !!}<span class="tx-danger">*</span><br>
                                    <input type="password" name="password" class="form-control wd-300">
                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('password') ? $errors->first('password') : ''}}
                                </span>
                            </div>

                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('confirm_password', 'Confirm Password:') !!}<span class="tx-danger">*</span>
                                    <input type="password" name="password_confirmation" class="form-control wd-300">
                                </div><!-- form-group -->

                            </div><!-- d-flex -->

                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('confirm_password') ? $errors->first('confirm_password') : ''}}
                                </span>
                            </div>


                            <div class="d-flex mg-b-20">
                                <div class="form-group mg-b-0">
                                    {!! Form::label('role_id', 'Select Role:') !!}<span class="tx-danger">*</span>
                                    {!! Form::select('role_id',$role,'',['class' => 'form-control wd-300']) !!}

                                </div><!-- form-group -->

                            </div><!-- d-flex -->
                            <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('role_id') ? $errors->first('role_id') : ''}}
                                </span>
                            </div>


                            <button type="submit" class="btn btn-info">Save</button>


                            {!! Form::close() !!}




                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop







