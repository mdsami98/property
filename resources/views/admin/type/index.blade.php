@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <span class="breadcrumb-item active">Type</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <a href="{{route('admin.type.create')}}" class="btn btn-info">Add Type</a>
                            </div>
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">All Type</h4>

                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">Id</th>
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-20p">Created At</th>
                                        <th class="wd-20p">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @if ($types)
                                        @foreach($types as $type)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$type->title}}</td>
                                                <td>{{$type->created_at->format('l j F Y')}}</td>
                                                <td>
                                                    <div class="admin-action">
                                                        <div class="edit">
                                                            <a href="{{route('admin.type.edit', $type->id)}}">Edit</a>
                                                        </div>
                                                        <div class="delete">
                                                            {!! Form::open(['method' => 'DELETE', 'action' => ['TypeController@destroy', $type->id]]) !!}

                                                            {!! Form::submit('Delete' , ['class' => '']) !!}
                                                            {!! Form::close()  !!}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop

