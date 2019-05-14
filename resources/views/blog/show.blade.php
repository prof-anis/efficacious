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
                                <a href="#">Blog Details</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Blog Details</h1>
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
    <section class="blog_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single_blog blog--default">
                        <article>
                            <figure>
                                <img src="{{ $post->image_url }}" alt="Blog image">
                            </figure>
                            <div class="blog__content">
                                <a href="#" class="blog__title">
                                    <h4>{{$post->title}}</h4>
                                </a>

                                <div class="blog__meta">
                                    <div class="author">
                                        <span class="lnr lnr-user"></span>
                                        <p>by
                                            <a href="#">{{$post->user->first_name}}</a>
                                        </p>
                                    </div>
                                    <div class="date_time">
                                        <span class="lnr lnr-clock"></span>
                                        <p>{{$post->created_at}}</p>
                                    </div>
                                    <div class="comment_view">
                                        <p class="comment">
                                            <span class="lnr lnr-bubble"></span>45</p>
                                        <p class="view">
                                            <span class="lnr lnr-eye"></span>345</p>
                                    </div>
                                </div>
                            </div>

                            <div class="single_blog_content">
                                {{$post->body}}
                        </article>
                    </div>
                    <!-- end /.single_blog -->

                    <div class="author_info">
                        <div class="author__img">
                            <img src="images/authi.jpg" alt="Auth Image">
                        </div>

                       
                    </div>
                    <!-- end /.author_info -->

                    <div class="comment_area">
                        <div class="comment__title">
                            <h4>2 comments</h4>
                        </div>

                        <div class="comment___wrapper">
                            <ul class="media-list">
                                <li class="depth-1">
                                    <div class="media">
                                        <div class="pull-left no-pull-xs">
                                            <a href="#" class="cmnt_avatar">
                                                <img src="images/comavatar.jpg" class="media-object" alt="Sample Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media_top">
                                                <div class="heading_left pull-left">
                                                    <a href="#">
                                                        <h4 class="media-heading">Thesera Minton</h4>
                                                    </a>
                                                    <span>April 29, 2016</span>
                                                </div>
                                                <a href="#" class="reply hidden-xs-m pull-right">Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod
                                                tempor unt ut labore et dolore magna aliquat enim ad minim.</p>
                                            <a href="#" class="reply visible-xs-m  pull-right">Reply</a>
                                        </div>
                                    </div>

                                    <ul class="children">
                                        <!-- Nested media object -->
                                        <li class="depth-2">
                                            <div class="media">
                                                <div class="pull-left no-pull-xs">
                                                    <a href="#" class="cmnt_avatar">
                                                        <img src="images/comavatar2.jpg" class="media-object" alt="Sample Image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="media_top">
                                                        <div class="heading_left pull-left">
                                                            <a href="#">
                                                                <h4 class="media-heading">Toriesta PingPong</h4>
                                                            </a>
                                                            <span>April 29, 2016</span>
                                                        </div>
                                                        <a href="#" class="reply hidden-xs-m pull-right">Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they
                                                        eiusmod tempor unt ut labore et dolore magna aliquat enim ad minim.</p>
                                                    <a href="#" class="reply visible-xs-m pull-right">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="depth-1">
                                    <div class="media">
                                        <div class="pull-left no-pull-xs">
                                            <a href="#" class="cmnt_avatar">
                                                <img src="images/comavatar2.jpg" class="media-object" alt="Sample Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media_top">
                                                <div class="heading_left pull-left">
                                                    <a href="#">
                                                        <h4 class="media-heading">Thesera Minton</h4>
                                                    </a>
                                                    <span>April 29, 2016</span>
                                                </div>
                                                <a href="#" class="reply hidden-xs-m pull-right">Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do they eiusmod
                                                tempor unt ut labore et dolore magna aliquat enim ad minim.</p>
                                            <a href="#" class="reply visible-xs-m pull-right">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.comment___wrapper -->
                    </div>
                    <!-- end /.col-md-8 -->

                    <div class="comment_area comment--form">
                        <!-- start reply_form -->
                        <div class="comment__title">
                            <h4>Leave A Reply</h4>
                        </div>
                        <div class="commnet_form_wrapper">
                            <div class="row">
                                <!-- start form -->
                                <form class="cmnt_reply_form" action="#" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="input_field" type="text" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="input_field" type="email" placeholder="Email" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="input_field" name="name" placeholder="Your text here..." rows="10" cols="80"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn--round btn--default" name="btn">Submit Now</button>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div>
                        </div>
                        <!-- end /.commnet_form_wrapper -->
                    </div>
                    <!-- end /.comment_area_wrapper -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
                    <aside class="sidebar sidebar--blog">
                        <div class="sidebar-card card--search card--blog_sidebar">
                            <div class="card-title">
                                <h4>Product Information</h4>
                            </div>
                            <!-- end /.card-title -->

                            <div class="card_content">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="Search product here...">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end /.card_content -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card sidebar--post card--blog_sidebar">
                            <div class="card-title">
                                <!-- Nav tabs -->
                                <ul class="nav post-tab" role="tablist">
                                    <li>
                                        <a href="#popular" id="popular-tab" class="active" aria-controls="popular" role="tab" data-toggle="tab" aria-selected="true">Popular Posts</a>
                                    </li>
                                    <li>
                                        <a href="#latest" id="latest-tab" aria-controls="latest" role="tab" data-toggle="tab" aria-selected="false">Latest Posts</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.card-title -->

                            <div class="card_content">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab">
                                        <ul class="post-list">
                                           
                                            @foreach($latest as $post)
                                            <li>
                                                <div class="thumbnail_img">
                                                    <img src="{{$post->image_url}}" alt="blog thumbnail">
                                                </div>
                                                <div class="title_area">
                                                    <a href="{{ route('blog.show',['id'=>$post->id]) }}">
                                                        <h4>{{$post->title}}</h4>
                                                    </a>
                                                    <div class="date_time">
                                                        <span class="lnr lnr-clock"></span>
                                                        <p>{{$post->created_at}}</p>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach
                                            
                                        </ul>
                                        <!-- end /.post-list -->
                                    </div>
                                    <!-- end /.tabpanel -->

                                    <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
                                        <ul class="post-list">
                                            
                                            @foreach($popular as $post)
                                            <li>
                                                <div class="thumbnail_img">
                                                    <img src="{{$post->image_url}}" alt="blog thumbnail">
                                                </div>
                                                <div class="title_area">
                                                    <a href="{{ route('blog.show',['id'=>$post->id]) }}">
                                                        <h4>{{$post->title}}</h4>
                                                    </a>
                                                    <div class="date_time">
                                                        <span class="lnr lnr-clock"></span>
                                                        <p>{{$post->created_at}}</p>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach
                                            
                                        </ul>
                                        <!-- end /.post-list -->
                                    </div>
                                    <!-- end /.tabpanel -->
                                </div>
                                <!-- end /.tab-content -->
                            </div>
                            <!-- end /.card_content -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--blog_sidebar card--category">
                            <div class="card-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="collapsible-content">
                                <ul class="card-content">
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>Wordpress
                                            <span class="item-count">35</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>Support Center
                                            <span class="item-count"> 45</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>General Topics
                                            <span class="item-count">13</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>Pre-Sales
                                            <span class="item-count">08</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>Purchases
                                            <span class="item-count">34</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>Billing
                                            <span class="item-count">78</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>Testimonials
                                            <span class="item-count">26</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--blog_sidebar card--tags">
                            <div class="card-title">
                                <h4>Categories</h4>
                            </div>

                            <ul class="tags">
                                <li>
                                    <a href="#">Branding</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Development</a>
                                </li>
                                <li>
                                    <a href="#">Branding</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Development</a>
                                </li>
                            </ul>
                            <!-- end /.tags -->
                        </div>
                        <!-- end /.sidebar-card -->

                        <div class="banner">
                            <img src="images/banner.jpg" alt="Banner">
                            <div class="banner_content">
                                <h1>Banner</h1>
                                <p>360x270</p>
                            </div>
                        </div>
                        <!-- end /.banner -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->
@endsection