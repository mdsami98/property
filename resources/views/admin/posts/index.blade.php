@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index-2.html">Dashboard</a>
                <a class="breadcrumb-item" href="#">Tables</a>
                <span class="breadcrumb-item active">All posts</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <a href="{{route('admin.post.create')}}" class="btn btn-info">Add new post</a>
                            </div>
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">All posts</h4>

                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-5p">Id</th>
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-20p">Created By</th>
                                        <th class="wd-20p">Publication</th>
                                        <th class="wd-20p">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @if ($posts)
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->user->name}}</td>
                                                <td>Unpublished</td>
                                                <td>
                                                    <div class="admin-action">
                                                        <div class="edit">
                                                            <a href="{{route('admin.post.edit', $post->id)}}">View</a>
                                                        </div>
                                                        <div class="edit">
                                                            <a href="{{route('admin.post.edit', $post->id)}}">Edit</a>
                                                        </div>
                                                        <div class="delete">
                                                            {!! Form::open(['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}

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




