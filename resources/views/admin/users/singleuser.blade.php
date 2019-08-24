@extends('layouts.admin')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.users.index')}}">All Users</a>
                <span class="breadcrumb-item active">User Details</span>

            </nav>
        </div><!-- br-pageheader -->


        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <h4 class="title">User detail</h4>
                    <div class="row">
                        <div class="col">
                            <div class="post-details">
                                <h6>Name : {{$user->name}}</h6>
                                <h6>Email : {{$user->email}}</h6>
                                <h6>Phome : {{$user->profile->phone_no}}</h6>
                                <h6>Posts : {{count($user->posts)}} Posts</h6>
                                <h6>Role : @if($user->role_id ==1)
                                               Customer
                                               @elseif($user->role_id ==2)
                                               Agents
                                    @elseif($user->role_id ==3)
                                        Admin
                                @endif
                                </h6>
                                <h6>Description : <p class="des">{{$user->profile->about_text}}</p></h6>
                            </div>
                        </div>
                        <div class="col">
                            <div class="post-details">
                                <div class="profile-image">
                                    <img src="{{url('profileImage',$user->profile->image)}}" alt="">
                                </div>


                            </div>
                            <div class="action">
                                @if($user->role_id == 2)
                                    <a href="{{route('admin.user.change', $user->id)}}" class="btn btn-success">Make User</a>
                                    @elseif($user->role_id == 1)
                                    <a href="{{route('admin.user.change', $user->id)}}" class="btn btn-danger">Make Agent</a>
                                @endif


                                    {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}


                                    <button type="submit" class="btn btn-info">Delete</button>


                                    {!! Form::close()  !!}

                                    <a href="{{route('admin.user.activity', $user->id)}}" class="btn btn-success">Activity</a>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="postimages">
                                <h4 class="title mt-5">{{$user->name}}'s Posts</h4>
                                @if (count($user->posts) > 0)
                                <div class="table-wrapper">
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

                                            @foreach($user->posts as $post)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$post->title}}</td>
                                                    <td>{{$post->user->name}}</td>
                                                    <td><div class="edit">
                                                            <a href="{{route('admin.image.show' , $post->id)}}">Add images</a>
                                                        </div></td>
                                                    <td>
                                                        <div class="admin-action">
                                                            <div class="edit">
                                                                @if($post->publication_status == 1)
                                                                    <a href="{{route('admin.post.publication', $post->id)}}" class="btn btn-success">Published</a>
                                                                @else
                                                                    <a href="{{route('admin.post.publication', $post->id)}}" class="btn btn-danger" style="background-color: red">Unbublished</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="edit">
                                                            <a href="{{route('admin.comments.show', $post->id)}}">View Comment</a>
                                                        </div></td>
                                                    <td>
                                                        <div class="admin-action">
                                                            <div class="edit">
                                                                <a href="{{route('admin.post.show', $post->id)}}">View</a>
                                                            </div>
                                                            <div class="edit">
                                                                {{--                                                            <a href="{{route('admin.post.edit', $post->id)}}">Edit</a>--}}
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

                                    <h2>No post</h2>

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
