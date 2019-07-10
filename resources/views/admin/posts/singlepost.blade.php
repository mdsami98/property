@extends('layouts.admin')

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <a class="breadcrumb-item" href="{{route('admin.post.index')}}">All Post</a>
                <span class="breadcrumb-item active">Single Post</span>
                <span class="message text-center">
                    @if(Session::has('message'))
                        {{ Session::get('message') }}
                    @endif
                </span>
            </nav>
        </div><!-- br-pageheader -->

    </div>

@stop
