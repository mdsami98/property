@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <span class="breadcrumb-item active">All posts</span>
                <span class="message text-center">
                    @if(Session::has('message'))
                        {{ Session::get('message') }}
                    @endif
                </span>
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
                                        <th class="wd-20p">Add image</th>
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
                                                <td><div class="edit">
                                                        <a href="{{route('admin.image.show' , $post->id)}}">Add images</a>
                                                    </div></td>
                                                <td>

                                                    @if($post->publication_status == 1)
                                                        <a href="{{route('admin.post.publication', $post->id)}}" class="btn btn-success">Published</a>
                                                    @else
                                                        <a href="{{route('admin.post.publication', $post->id)}}" class="btn btn-danger">Unbublished</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="admin-action">
                                                        <div class="edit">
                                                            <a href="{{route('admin.post.show', $post->id)}}">View</a>
                                                        </div>
                                                        <div class="edit">
                                                            <a href="{{route('admin.post.edit', $post->id)}}">Edit</a>
                                                        </div>
{{--                                                        <div class="delete">--}}
{{--                                                            {!! Form::open(['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}--}}

{{--                                                            {!! Form::submit('Delete' , ['class' => '']) !!}--}}
{{--                                                            {!! Form::close()  !!}--}}
{{--                                                        </div>--}}
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




