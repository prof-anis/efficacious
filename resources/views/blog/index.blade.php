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
                                <a href="#">Blog Version 02</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Blog Version 02</h1>
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

                	@forelse($blogs as $blog)
                    <div class="single_blog blog--default">
                        <figure>
                            <img src="{{$blog->image_url}}" alt="Blog image">

                            <figcaption>
                                <div class="blog__content">
                                    <a href="{{ route('blog.show',['id'=>$blog->id]) }}" class="blog__title">
                                        <h4>{{$blog->title}}</h4>
                                    </a>

                                    <div class="blog__meta">
                                        <div class="author">
                                            <span class="lnr lnr-user"></span>
                                            <p>by
                                                <a href="{{ route('blog.show',['id'=>$blog->id]) }}">{{$blog->user->first_name}}</a>
                                            </p>
                                        </div>
                                        <div class="date_time">
                                            <span class="lnr lnr-clock"></span>
                                            <p>{{$blog->created_at}}</p>
                                        </div>
                                        <div class="comment_view">
                                            <p class="comment">
                                                <span class="lnr lnr-bubble"></span>45</p>
                                            <p class="view">
                                                <span class="lnr lnr-eye"></span>345</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn_text">
                                    <p>
                                    	{{$blog->body}}
                                    </p>
                                    <a href="{{ route('blog.show',['id'=>$blog->id]) }}" class="btn btn--md btn--round">Read More</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    @empty
                    <p>sorry, no blog post yet</p>
                    @endforelse
                    <!-- end /.single_blog -->

                   
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
                                        <a href="#popular" class="active" id="popular-tab" aria-controls="popular" role="tab" data-toggle="tab" aria-selected="true">Popular Posts</a>
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
                                    <div role="tabpanel" class="tab-pane active fade show" id="popular" aria-labelledby="popular-tab">
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
                                	@foreach($cats as $cat)
                                    <li>
                                        <a href="">
                                            <span class="lnr lnr-chevron-right"></span>{{$cat->name}}
                                            <span class="item-count">{{count($cat->blog)}}</span>
                                        </a>
                                    </li>

                                    @endforeach
                                   
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