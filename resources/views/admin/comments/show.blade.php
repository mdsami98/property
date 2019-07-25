@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <span class="breadcrumb-item active"> </span>
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
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">{{$post->title}}</h4>

                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-5p">Id</th>
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-20p">Email</th>
                                        <th class="wd-20p">Comment</th>
                                        <th class="wd-20p">Post</th>
                                        <th class="wd-20p">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @if ($comments)
                                        @foreach($comments as $comment)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$comment->author}}</td>
                                                <td>{{$comment->email}}</td>
                                                <td>{{$comment->commentBody}}</td>
                                                <td><a href="{{route('admin.post.show', $comment->post->id)}}">View post</a></td>


                                                <td>
                                                    <div class="admin-action">

                                                        <div class="delete">
                                                            {!! Form::open(['method' => 'DELETE', 'action' => ['PostCommentController@destroy', $comment->id]]) !!}

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

