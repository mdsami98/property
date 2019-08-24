@extends('layouts.agent')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('agent.home')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('agent.post.index')}}">All Post</a>
                <span class="breadcrumb-item active">posts</span>

            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <a href="{{route('agent.post.create')}}" class="btn btn-info">Add new post</a>
                            </div>

                            @if (count($posts) > 0)
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">All {{$text ? $text : ''}} posts</h4>

                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-5p">Id</th>
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-20p">Created By</th>
                                        <th class="wd-20p">Add image</th>
                                        <th class="wd-20p">Publication</th>
                                        <th class="wd-20p">Comment</th>
                                        <th class="wd-20p">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)

                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->user->name}}</td>
                                                <td><div class="edit">
                                                        <a href="{{route('agent.image.show' , $post->id)}}">Add images</a>
                                                    </div></td>
                                                <td>
                                                    <div class="admin-action">
                                                        <div class="edit">
                                                    @if($post->publication_status == 1)
                                                        <a href="{{route('agent.post.publication', $post->id)}}" class="btn btn-success">Published</a>
                                                    @else
                                                        <a href="{{route('agent.post.publication', $post->id)}}" class="btn btn-danger" style="background-color: red">Unbublished</a>
                                                    @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="edit">

                                                        <a href="{{route('agent.comments.show', $post->id)}}">View Comment</a>
                                                    </div></td>
                                                <td>
                                                    <div class="admin-action">
                                                        <div class="edit">
                                                            <a href="{{route('agent.post.show', $post->id)}}">View</a>
                                                        </div>
                                                        <div class="edit">
{{--                                                            <a href="{{route('agent.post.edit', $post->id)}}">Edit</a>--}}
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



                                    </tbody>
                                </table>
                            </div>

                                @else
                                <h4 class="mg-t-20 text-center">No post</h4>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop




