@extends('layouts.frontend')



@section('content')
    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url({{asset('frontEnd/')}}/images/temp-images/banner.jpg); background-size: cover;">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>{{$post->title}}</span></h1>
                <div class="page-breadcrumbs">
                    <nav class="property-breadcrumbs">
                        <ul>
                            <li><a href="{{route('user.home')}}">Home</a><i class="breadcrumbs-separator fa fa-angle-right"></i></li>
                            <li><a href="">Add Image</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- End Page Head -->

    <div class="container contents detail">
        <div class="row">

            <div class="span6">
                <div class="postimage">
                    <img src="{{url('postimages',$post->image)}}" class="img-responsive" alt="Image">
                </div>
                <h4>Add more image</h4>

                {!! Form::open(['method' => 'POST', 'action' => 'UserPostImageController@store', 'enctype' => 'multipart/form-data']) !!}
                <input type="hidden" name="post_id" value="{{$post->id}}">

                <div class="form-group mg-b-0">
                    {!! Form::label('image[]', 'Upload image:') !!}
                    <input type="file" name="image[]" class="form-control">
                </div>
                <span class="text-danger">
                      {{$errors->has('image') ? "The post Image Field Is requerd" : ''}}
                 </span>
                <br>
                <button type="submit" class="real-btn btn">Add Image</button>
                {!! Form::close() !!}
            </div>



            <div class="span6">

                @if(count($postImages) > 0)
                <div class="table">
                    <h4 class="text-center mt-2 mb-40 title">Post Images</h4>

                    <table id="" class="table">
                        <thead>
                        <tr>
                            <th class="wd-5p">Id</th>
                            <th class="wd-25p">Image</th>
                            <th class="wd-15p">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php($i=1)


                            @foreach($postImages as $postImage)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{url('postimages',$postImage->image)}}" class="img-responsive" alt="Image" width="60"></td>
                                    <td>

                                        <div class="delete">
                                            {!! Form::open(['method' => 'DELETE', 'action' => ['UserPostImageController@destroy', $postImage->id]]) !!}

                                            {!! Form::submit('Delete' , ['class' => 'real-btn remove']) !!}
                                            {!! Form::close()  !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach




                        </tbody>
                    </table>

                </div>
                    @endif
            </div>
        </div>
    </div>
@stop


