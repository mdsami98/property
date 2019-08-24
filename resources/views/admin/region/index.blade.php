@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <span class="breadcrumb-item active">Region</span>
            </nav>
        </div><!-- br-pageheader -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="">
                        <a href="{{route('admin.region.create')}}" class="btn btn-info">Add new region</a>
                    </div>
                    <div class="table-wrapper">
                        <h4 class="text-center mt-2 mb-40 title">All Regions</h4>

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
                        @if (count($regions) > 0)
                            @foreach($regions as $region)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$region->region}}</td>
                                    <td>{{$region->created_at->format('l j F Y')}}</td>
                                    <td>
                                        <div class="admin-action">
                                            <div class="edit">
                                                <a href="{{route('admin.region.edit', $region->id)}}">Edit</a>
                                            </div>
                                            <div class="delete">
                                                {!! Form::open(['method' => 'DELETE', 'action' => ['RegionController@destroy', $region->id]]) !!}

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
