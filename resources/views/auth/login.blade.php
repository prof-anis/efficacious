@extends('layouts.app')

@section('content')

<!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Login</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="{{ route('login') }}"  method="POST">

                        @csrf
                        
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign in with your username</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="user_name" type="text" class="text_field" placeholder="Enter your username..." name="email">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input id="pass" type="text" class="text_field" placeholder="Enter your password..." name="password">
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Remember me</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit">Login Now</button>

                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        <a href="{{ route('password.request') }}">Password ?</a> 
                                       
                                    <p class="signup">Don't have an
                                        <a href="{{ route('register') }}">account</a>?</p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->

    @endsection
