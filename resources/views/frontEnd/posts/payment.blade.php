@extends('layouts.frontend')

@section('content')
    <div class="page-head" style="background-repeat: no-repeat;background-position: center top;background-image: url({{asset('frontEnd/')}}/images/temp-images/banner.jpg); background-size: cover;">
        <div class="container">
            <div class="wrap clearfix">
                <h1 class="page-title"><span>Choge Payment methd for premium post</span></h1>
                <div class="page-breadcrumbs">
                    <nav class="property-breadcrumbs">
                        <ul>
                            <li><a href="{{route('user.home')}}">Home</a><i class="breadcrumbs-separator fa fa-angle-right"></i></li>
                            <li><a href="{{route('post.index')}}">My property</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- End Page Head -->

    <div class="container contents detail">
        <div class="row">
          <div class="span6 main-wrap">
              <h4>For premium post you have to pay 100 tk</h4>
              <div class="payment-box">
                  <div class="bikas">
                    <form action="{{route('post.payment.bikash')}}" method="post">
                          @csrf
                          <article>
                              <label>

                              </label>
                          </article>

                        <input type="hidden" name="title" value="{{$formInput['title']}}">
                        <input type="hidden" name="user_id" value="{{$formInput['user_id']}}">
                        <input type="hidden" name="category_id" value="{{$formInput['category_id']}}">
                        <input type="hidden" name="type_id" value="{{$formInput['type_id']}}">
                        <input type="hidden" name="region" value="{{$formInput['region']}}">
                        <input type="hidden" name="region_area" value="{{$formInput['region_area']}}">
                        <input type="hidden" name="post_type" value="{{$formInput['post_type']}}">
                        <input type="hidden" name="price" value="{{$formInput['price']}}">
                        <input type="hidden" name="area" value="{{$formInput['area']}}">
                        <input type="hidden" name="phn_number" value="{{$formInput['phn_number']}}">
                        <input type="hidden" name="bedroom" value="{{$formInput['bedroom']}}">
                        <input type="hidden" name="bathroom" value="{{$formInput['bathroom']}}">
                        <input type="hidden" name="garage" value="{{$formInput['garage']}}">
                        <input type="hidden" name="description" value="{{$formInput['description']}}">
                        <input type="hidden" name="address" value="{{$formInput['address']}}">
                        <input type="hidden" name="image" value="{{$formInput['image']}}">
                        <input type="hidden" name="floor" value="{{$formInput['floor']}}">
                        <input type="hidden" name="amount" value="100">

                          <input type="hidden" name="total" value="">

                        <input class="bikash" type="submit" value="bikash">
                      </form>
                  </div>
                  <div class="paypal">

                  </div>
                  <div class="stripe">
                    <form action="{{route('post.payment')}}" method="post">
                          @csrf
                          <article>
                              <label>

                              </label>
                          </article>


                          <input type="hidden" name="title" value="{{$formInput['title']}}">
                          <input type="hidden" name="user_id" value="{{$formInput['user_id']}}">
                          <input type="hidden" name="category_id" value="{{$formInput['category_id']}}">
                          <input type="hidden" name="type_id" value="{{$formInput['type_id']}}">
                          <input type="hidden" name="region" value="{{$formInput['region']}}">
                          <input type="hidden" name="region_area" value="{{$formInput['region_area']}}">
                          <input type="hidden" name="post_type" value="{{$formInput['post_type']}}">
                          <input type="hidden" name="price" value="{{$formInput['price']}}">
                          <input type="hidden" name="area" value="{{$formInput['area']}}">
                          <input type="hidden" name="phn_number" value="{{$formInput['phn_number']}}">
                          <input type="hidden" name="bedroom" value="{{$formInput['bedroom']}}">
                          <input type="hidden" name="bathroom" value="{{$formInput['bathroom']}}">
                          <input type="hidden" name="garage" value="{{$formInput['garage']}}">
                          <input type="hidden" name="description" value="{{$formInput['description']}}">
                          <input type="hidden" name="address" value="{{$formInput['address']}}">
                          <input type="hidden" name="image" value="{{$formInput['image']}}">
                        <input type="hidden" name="floor" value="{{$formInput['floor']}}">
                        <input type="hidden" name="amount" value="100">

                          <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                  data-key="pk_test_TWNkqLGoXWHCzIX93oNkLynz00jlkpYerb"
                                  data-description="A Flask Charge"
                                  data-amount=""
                                  data-locale="auto">

                          </script>
                      </form>
                  </div>


              </div>

          </div>
        </div>

      </div>



@stop
