@extends('layouts.frontend')

@section('content')
    <div class="height"></div>
    <div class="container contents blog-page">
        <div class="row">
            <div class="span6 offset3 main-wrap">
                <!-- Main Content -->

                <div class="main">

                    <div class="inner-wrapper">
                        <h4>Login</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-option">
                                <label for="username">Email<span>*</span></label><br>
                                <input id="email" name="email" type="email"
                                       class="required @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"
                                       title="* Provide user name!" autofocus required/>
                                <br>

                                @error('email')
                                <span class="invalid-feedback text-danger" role="alert">
                                        <strong class="">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-option">
                                <label for="password">Password<span>*</span></label><br>
                                <input id="password" name="password" type="password" class="required @error('password') is-invalid @enderror" title="* Provide password!" required/>
                                <br>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <input type="submit" id="login-button" name="submit" value="Log in" class="real-btn login-btn" />


                        </form>
                        <p>
                            <a class="" href="{{ route('register') }}">Register Here</a>
                            <span class="divider">-</span>
                            <a class="activate-section" data-section="forgot-section" href="#">Forgot Password</a>
                        </p>
                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span9 -->
        </div><!-- End contents row -->
    </div><!-- End Content -->
@stop
