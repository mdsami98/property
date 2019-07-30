@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <span class="breadcrumb-item active">All Users</span>

            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <a href="{{route('admin.users.create')}}" class="btn btn-info">Add new user</a>

                            </div>
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">All Users</h4>

                                <table id="pageTable" class="table display responsive">
                                    <thead>
                                    <tr>

                                        <th class="wd-15p">Id</th>
                                        <th class="wd-15p">Name</th>
                                        <th class="wd-20p">Email</th>
                                        <th class="wd-20p">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @if ($users)
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>


                                                <td>
                                                    <div class="admin-action">
                                                        <div class="edit">
                                                            <a href="{{route('admin.users.show', $user->id)}}">Details</a>
                                                        </div>
                                                        <div class="edit">
{{--                                                            <a href="{{route('admin.post.edit', $post->id)}}">Edit</a>--}}
                                                        </div>
                                                        <div class="delete">
                                                            {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}

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

@section('custom_script')
    <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.bootstrsp.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#pageTable').DataTable();
        } );
    </script>

@stop




