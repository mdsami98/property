@extends('layouts.admin')

@section('content')
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>

        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">
            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-teal rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-person tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Users</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{count($users)}}</p>

                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="bg-danger rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-alert tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Unapproved post</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{count($notificationPost)}}</p>

                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="bg-primary rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="ion ion-person tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Agents</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{count($agents)}}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="bg-indigo rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="fa fa-product-hunt tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Premium post</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{count($premiumPosts)}}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->
                <br>
                <br>
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="bg-success rounded overflow-hidden">
                        <div class="pd-25 d-flex align-items-center">
                            <i class="fa fa-ion-pricetag tx-60 lh-0 tx-white op-7"></i>
                            <div class="mg-l-20">
                                <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Premium post</p>
                                <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{count($allposts)}}</p>
                            </div>
                        </div>
                    </div>
                </div><!-- col-3 -->

            </div><!-- row -->

        </div><!-- br-pagebody -->

        {{--            FOOTER--}}
        @include('admin.includes.footer')
        {{--            FOOTER--}}
    </div>
@stop


