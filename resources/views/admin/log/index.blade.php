@extends('layouts.admin')

@section('content')

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                <span class="breadcrumb-item active">Security log</span>

            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="">

                            </div>
                            <div class="table-wrapper">
                                <h4 class="text-center mt-2 mb-40 title">All log</h4>

                                <table id="datatable1" class="table display responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">who</th>
                                        <th class="wd-15p">what</th>
                                        <th class="wd-15p">when</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @if ($logs)
                                        @foreach($logs as $log)
                                            <tr>

                                                <td>{{$log->action_by}}</td>
                                                <td>{{$log->action}} " {{$log->action_for}} "</td>
                                                <td>{{$log->created_at->format('j M Y')}}</td>
{{--                                                <td>{{$log->created_at->format('j M Y h:m:s A')}}</td>--}}


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




