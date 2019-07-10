@extends('layouts.admin')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.post.index')}}">All Post</a>
                <span class="breadcrumb-item active">Add Images</span>
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
                        <div class="col-5">
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">Add Images</h4>
                                <div class="postDetails">
                                    <h6>Post Name: {{$post->title}}</h6>
                                    <h6>Submited by: {{$post->user->name}}</h6>
                                </div>

                                {!! Form::open(['method' => 'POST', 'action' => 'PostImageController@store', 'enctype' => 'multipart/form-data']) !!}

                                <input type="hidden" name="post_id" value="{{$post->id}}">

                                <div class="d-flex mg-b-20">
                                    <div class="form-group mg-b-0">
                                        {!! Form::label('image[]', 'Upload image:') !!}
                                        <input type="file" name="image[]" class="form-control" multiple="multiple">
                                    </div><!-- form-group -->

                                </div><!-- d-flex -->
                                <div class="d-flex mg-b-10">
                                <span class="text-danger">
                                    {{$errors->has('image') ? "The post Image Field Is requerd" : ''}}
                                </span>
                                </div>
                                <button type="submit" class="btn btn-info">Add Image</button>

                                {!! Form::close() !!}

                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                            </div>
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">Post Images</h4>

                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-5p">Id</th>
                                        <th class="wd-25p">Image</th>
                                        <th class="wd-15p">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php($i=1)

                                    @if($postImages)
                                        @foreach($postImages as $postImage)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td><img src="{{url('postimages',$postImage->image)}}" class="img-responsive" alt="Image" width="60"></td>
                                                <td>

                                                    <div class="delete">
                                                        {!! Form::open(['method' => 'DELETE', 'action' => ['PostImageController@destroy', $postImage->id]]) !!}

                                                        {!! Form::submit('Delete' , ['class' => 'btn btn-danger']) !!}
                                                        {!! Form::close()  !!}
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
