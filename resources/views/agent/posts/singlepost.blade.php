@extends('layouts.agent')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('agent.home')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('agent.post.index')}}">All Post</a>
                <span class="breadcrumb-item active">Single Post</span>

            </nav>
        </div><!-- br-pageheader -->


        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <h4 class="title">Post detail</h4>
                    <div class="row">
                        <div class="col">
                            <div class="post-details">
                                <h6>Post Name : {{$post->title}}</h6>
                                <h6>Owner : {{$post->user->name}}</h6>
                                <h6>Category : {{$post->category->title}}</h6>
                                <h6>Purpose : {{$post->type->title}}</h6>
                                <h6>Phone Number : {{$post->phn_number}}</h6>
                                <h6>Price : {{$post->price}} Tk.</h6>
                                <h6>Post type : {{$post->post_type == 0 ? 'Normal' : 'Premium'}}</h6>
                            </div>
                        </div>
                        <div class="col">
                            <div class="post-details">
                                <h6>Badrooms : {{$post->bedroom}}</h6>
                                <h6>bathrooms : {{$post->bathroom}}</h6>
                                <h6>Garage : {{$post->garage}}</h6>
                                <h6>Floor : {{$post->floor}}</h6>
                                <h6>Address : {{$post->address}}</h6>

                            </div>
                            <div class="action">
                                @if($post->publication_status == 1)
                                    <a href="{{route('agent.post.publication', $post->id)}}" class="btn btn-success">Published</a>
                                    @else
                                    <a href="{{route('agent.post.publication', $post->id)}}" class="btn btn-danger">Unbublished</a>
                                @endif

                                @if($post->user_id == Auth::user()->id)
                                <a href="{{route('agent.post.edit', $post->id)}}" class="btn btn-info">Edit</a>

                                @endif
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['AgentPostController@destroy', $post->id]]) !!}


                                    <button type="submit" class="btn btn-info">Delete</button>


                                    {!! Form::close()  !!}
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="description">
                                <h4>Decription</h4>
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="postimages">
                                <h4 class="title">Images</h4>

                                    <img src="{{url('postimages',$post->image)}}" alt="">


                                @if($postImages)
                                    @foreach($postImages as $postImages)
                                        <img src="{{url('postimages',$postImages->image)}}" alt="">
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
