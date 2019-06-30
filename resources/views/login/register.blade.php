@extends('layouts.frontend')

@section('content')
    <div class="height"></div>
    <div class="container contents blog-page">
        <div class="row">
            <div class="span6 offset3 main-wrap">
                <!-- Main Content -->
                <div class="main">

                    <div class="inner-wrapper">
                        <h4>Register</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-option">
                                <label for="name">Name<span>*</span></label>
                                <input id="name" name="name" type="text"
                                       class="required @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}"
                                       title="* Provide user name!" autofocus required/>
                                <br>

                                @error('name')
                                <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-option">
                                <label for="email">Email<span>*</span></label>
                                <input id="email" name="email" type="email"
                                       class="required @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"
                                       title="* Provide user name!" autofocus required/>
                                <br>

                                @error('email')
                                <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-option">
                                <label for="password">Password<span>*</span></label>
                                <input id="password" name="password" type="password" class="required @error('password') is-invalid @enderror" title="* Provide password!" required/>
                                <br>
                                @error('password')
                                <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-option">
                                <label for="password-confirm">Confirm Password<span>*</span></label>
                                <input id="password-confirm" name="password_confirmation" type="password" class="required" title="* Provide password!" required/>

                            </div>

                            <input type="submit" id="login-button" name="submit" value="Log in" class="real-btn login-btn" />


                        </form>
                        <p>
                            Allready have an account?
                            <a class="" data-section="register-section" href="{{ route('login') }}">Login Here</a>


                        </p>
                    </div>

                </div><!-- End Main Content -->

            </div> <!-- End span9 -->
        </div><!-- End contents row -->
    </div><!-- End Content -->
@stop
