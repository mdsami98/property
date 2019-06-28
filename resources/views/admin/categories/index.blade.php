@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index-2.html">Dashboard</a>
                <a class="breadcrumb-item" href="#">Tables</a>
                <span class="breadcrumb-item active">Category</span>
            </nav>
        </div><!-- br-pageheader -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="">
                        <a href="{{route('admin.category.create')}}" class="btn btn-info">Add CAtegory</a>
                    </div>
                    <div class="table-wrapper">
                        <h4 class="text-center mt-2 mb-40 title">All Category</h4>

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
                        @if ($categories)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->created_at->format('l j F Y')}}</td>
                                    <td>
                                        <div class="admin-action">
                                            <div class="edit">
                                                <a href="{{route('admin.category.edit', $category->id)}}">Edit</a>
                                            </div>
                                            <div class="delete">
                                                {!! Form::open(['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}

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
