 @extends('layouts.app')


@section('title')

Home

@endsection

 @section('content')

 <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="{{ asset('ipad.jpg')}}" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">Get your business out</span>
                                    <span class="bold">where the customers are </span>
                                </h1>
                                <p class="tagline">several people list their business here weekly !</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="{{ route('product.index',['type'=>'goods']) }}" class="btn btn--round btn--lg">View All Products</a>
                                <a href="{{route('product.index',['type'=>'services'])}}" class="btn btn--round btn--lg">View All Services</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="{{ route('products.search') }}"  method="GET">
                                <input type="text" class="text_field" placeholder="Search your products..." name="search">
                                <div class="search__select select-wrap">
                                    <select name="category" class="select--field" id="blah" name="cat_id">
                                        @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg">Search Now</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
    <section class="features section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="{{ asset('default/images/feature1.png')}}" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Best UX Research</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="{{ asset('default/images/feature2.png')}}" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Fully Responsive</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="{{ asset('default/images/feature3.png')}}" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Buy & Sell Easily</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END FEATURE AREA
=================================-->


    <!--================================
    START FEATURED PRODUCT AREA
=================================-->
    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Weekly Featured Products</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">

                        @foreach($trendings as $trending)
                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="{{ $trending->image_url}}" alt="Featured products">
                                <div class="prod_btn">
                                   
                                    <a href="{{route('product.show',['id'=>$trending->id])}}" class="transparent btn--sm btn--round">view</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="single-product.html" class="product_title">
                                        <h4>{{$trending->name}}</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="{{ asset('default/images/auth.jpg')}}" alt="author image">
                                            <p>
                                                <a href="#">{{ $trending->user->first_name,$trending->user->last_name }}</a>
                                            </p>
                                        </li>
                                        <li class="product_cat">
                                            <a href="#">
                                                <span class="lnr lnr-book"></span> WordPress</a>
                                        </li>
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p>{{$trending->description}}</p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="#">website</a>
                                            </li>
                                            <li>
                                                <a href="#">plugin</a>
                                            </li>
                                            <li>
                                                <a href="#">landing page</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span>${{$trending->amount}}</span>
                                            <p>
                                                <span class="lnr lnr-heart"></span> {{count($trending->reaction) }}</p>
                                        </div>
                                        <div class="sell">
                                            <p>
                                                <span class="lnr lnr-cart"></span>
                                                <span>{{ count($trending->cart) }}</span>
                                            </p>
                                        </div>

                                        <div class="rating product--rating">
                                            <ul>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        @endforeach
                        <!--end /.featured__single-slider-->

                       
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
    <section class="products section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Newest Release Products</h2>
                        </div>

                        <div class="filter__menu">
                            <p>Filter by:</p>
                            <div class="filter__menu_icon">
                                <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="svg" src="{{ asset('default/images/svg/menu.svg')}}" alt="menu icon">
                                </a>

                                <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                                    <li>
                                        <a href="#">Trending items</a>
                                    </li>
                                    <li>
                                        <a href="#">Best seller</a>
                                    </li>
                                    <li>
                                        <a href="#">Best rating</a>
                                    </li>
                                    <li>
                                        <a href="#">Low price</a>
                                    </li>
                                    <li>
                                        <a href="#">High price</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="sorting">
                        <ul>
                            <li>
                                <a href="#">Plugins</a>
                            </li>
                            <li>
                                <a href="#">WordPress</a>
                            </li>
                            <li>
                                <a href="#">Site Template</a>
                            </li>
                            <li>
                                <a href="#">PSD Template</a>
                            </li>
                            <li>
                                <a href="#">Joomla</a>
                            </li>
                            <li>
                                <a href="#">User Interface</a>
                            </li>
                            <li>
                                <a href="#">Landing Page</a>
                            </li>
                            <li>
                                <a href="#">Software</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">

                @foreach($goods as $good)
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="{{ $good['image_url'] }}" alt="Product Image">
                            <div class="prod_btn">
                                <a href="{{ route('product.show',['id'=>$good['id']]) }}" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="single-product.html" class="product_title">
                                <h4>{{ $good['name'] }}</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="{{ $good->user->image_url}}" alt="author image">
                                    <p>
                                        <a href="{{ route('product.show',['id'=>$good['id']]) }}">{{ $good->user->first_name,$good->user->last_name}}</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="#">
                                        <span class="lnr lnr-book"></span>Category</a>
                                </li>
                            </ul>

                            <p>{{  $good['description']  }}</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>${{ $good->amount }}</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                @endforeach

               
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                        <a href="{{ route('product.index',['type'=>'goods'])}}" class="btn btn--lg btn--round">All New Products</a>
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END PRODUCTS AREA
=================================-->


    <!--================================
    START FOLLOWERS FEED AREA
=================================-->
    <section class="followers-feed section--padding">
        <!-- start .container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Trending Services this week</h2>
                        </div>

                        <div class="product__slider-nav follow_feed_nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="product_slider">
                        @foreach($services as $service)
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <img src="{{ $service->image_url}}" alt="Product Image">
                                <div class="prod_btn">
                                    <a href="{{ route('product.show',['id'=>$service['id']]) }}" class="transparent btn--sm btn--round">More Info</a>
                                    <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="{{ route('product.show',['id'=>$service['id']]) }}" class="product_title">
                                    <h4>{{ $service->name}}</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="{{ $service->user->image_url }}" alt="author image">
                                        <p>
                                            <a href="#">{{ $service->user->first_name,$service->user->last_name}}</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>Category</a>
                                    </li>
                                </ul>

                                <p>{{ $service->description}}</p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>$10 - $50</span>
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90</p>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->

                        @endforeach

                      
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- start /.container -->
    </section>
    <!--================================
    END FOLLOWERS FEED AREA
=================================-->

    <!--================================
    START COUNTER UP AREA
=================================-->
    <section class="counter-up-area bgimage">
        <div class="bg_image_holder">
            <img src="{{ asset('default/images/countbg.jpg')}}" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count">38,436</span>
                        <p>items for sale</p>
                    </div>
                    <div class="counter mcolor3">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count">38,436</span>
                        <p>total Sales</p>
                    </div>
                    <div class="counter mcolor1">
                        <span class="lnr lnr-smile"></span>
                        <span class="count">38,436</span>
                        <p>appy customers</p>
                    </div>
                    <div class="counter mcolor4">
                        <span class="lnr lnr-users"></span>
                        <span class="count">38,436</span>
                        <p>members</p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END COUNTER UP AREA
=================================-->


    <section class="why_choose section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Why Choose
                            <span class="highlighted">MartPlace</span>
                        </h1>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                            est laborum dolo rumes fugats untras.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">One Time Payment</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-magic-wand scolor"></span>
                            <h3 class="feature2-title">Quality Products</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-lock mcolor1"></span>
                            <h3 class="feature2-title">100% Secure Paymentt</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">04</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-chart-bars mcolor2"></span>
                            <h3 class="feature2-title">Well Organized Code</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">05</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-leaf mcolor3"></span>
                            <h3 class="feature2-title">Life Time Free Update</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone mcolor4"></span>
                            <h3 class="feature2-title">Fast and Friendly Support</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END COUNTER UP AREA
=================================-->

    <!--================================
    START SELL BUY
=================================-->
    <section class="proposal-area">

        <!-- start container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--left bgimage">
                        <div class="bg_image_holder">
                            <img src="{{ asset('default/images/bbg.png')}}" alt="prop image">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon ">
                                <img src="{{ asset('default/images/buy.png')}}" alt="Buy icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Sell Your Products</h1>
                                <p class="text--white">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diamcongue is laoreet elit metus.</p>
                            </div>
                            <a href="#" class="btn--round btn btn--lg btn--white">Become an Author</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>

                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--right">
                        <div class="bg_image_holder">
                            <img src="{{ asset('default/images/sbg.png')}}" alt="this is magic">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon">
                                <img src="{{ asset('default/images/sell.png')}}" alt="Sell icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Start Shopping Today</h1>
                                <p class="text--white">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diamcongue is laoreet elit metus.</p>
                            </div>
                            <a href="#" class="btn--round btn btn--lg btn--white">Start Shopping</a>
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>
            </div>
        </div>
        <!-- start container-fluid -->
    </section>
    <!--================================
    END SELL BUY
=================================-->

    <!--================================
    START TESTIMONIAL
=================================-->
    <section class="testimonial-area section--padding">
        <!-- start .container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Our Clients
                            <span class="highlighted">Feedback</span>
                        </h1>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                            est laborum dolo rumes fugats untras.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="testimonial-slider">
                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="{{ asset('default/images/test1.jpg')}}" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">Tubeda Pagla</h4>
                                    <span class="desig">Product Designer</span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                    is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="{{ asset('default/images/test2.jpg')}}" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">Tarashi Hamada</h4>
                                    <span class="desig">Quality Ninja</span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                    is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="{{ asset('default/images/test1.jpg')}}" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">Tubeda Pagla</h4>
                                    <span class="desig">Product Designer</span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                    is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="{{ asset('default/images/test2.jpg')}}" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">Tarashi Hamada</h4>
                                    <span class="desig">Quality Ninja</span>
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                    leo quam aliquet diam congue is the laoreet elit metus. Nunc placerat mi is id nisi interdum
                                    is mollis. Praesent the pharetra, justo ut scelerisque.</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->
                    </div>
                    <!-- end /.testimonial_slider -->

                    <div class="all-testimonial">
                        <a href="testimonial.html" class="btn btn--lg btn--round">View All Reviews</a>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end container -->
    </section>
    <!--================================
    END TESTIMONIAL
=================================-->

    <!--================================
    START LATEST NEWS
=================================-->
    <section class="latest-news section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Latest
                            <span class="highlighted">News</span>
                        </h1>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                            est laborum dolo rumes fugats untras.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news">
                        <div class="news__thumbnail">
                            <img src="{{ asset('default/images/news1.png')}}" alt="News Thumbnail">
                        </div>
                        <div class="news__content">
                            <a href="#" class="news-title">
                                <h4>Web Design Trends in 2019</h4>
                            </a>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <div class="news__meta">
                            <div class="date">
                                <span class="lnr lnr-clock"></span>
                                <p>24 Feb 2019</p>
                            </div>

                            <div class="other">
                                <ul>
                                    <li>
                                        <span class="lnr lnr-bubble"></span>
                                        <span>45</span>
                                    </li>
                                    <li>
                                        <span class="lnr lnr-eye"></span>
                                        <span>345</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news">
                        <div class="news__thumbnail">
                            <img src="{{ asset('default/images/news2.png')}}" alt="News Thumbnail">
                        </div>
                        <div class="news__content">
                            <a href="#" class="news-title">
                                <h4>The best advices to start your own project</h4>
                            </a>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <div class="news__meta">
                            <div class="date">
                                <span class="lnr lnr-clock"></span>
                                <p>15 Mar 2019</p>
                            </div>

                            <div class="other">
                                <ul>
                                    <li>
                                        <span class="lnr lnr-bubble"></span>
                                        <span>45</span>
                                    </li>
                                    <li>
                                        <span class="lnr lnr-eye"></span>
                                        <span>345</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news">
                        <div class="news__thumbnail">
                            <img src="{{ asset('default/images/news1.png')}}" alt="News Thumbnail">
                        </div>
                        <div class="news__content">
                            <a href="#" class="news-title">
                                <h4>Best Tomato Sauce in town</h4>
                            </a>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <div class="news__meta">
                            <div class="date">
                                <span class="lnr lnr-clock"></span>
                                <p>20 Dec 2016</p>
                            </div>

                            <div class="other">
                                <ul>
                                    <li>
                                        <span class="lnr lnr-bubble"></span>
                                        <span>45</span>
                                    </li>
                                    <li>
                                        <span class="lnr lnr-eye"></span>
                                        <span>345</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END LATEST NEWS
=================================-->

    <!--================================
    START SPECIAL FEATURES AREA
=================================-->
    <section class="special-feature-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="special-feature feature--1">
                        <img src="{{ asset('default/images/spf1.png')}}" alt="Special Feature image">
                        <h3 class="special__feature-title">30 Days Money Back
                            <span class="highlight">Guarantee</span>
                        </h3>
                    </div>
                </div>
                <!-- end /.col-md-6 -->
                <div class="col-md-6">
                    <div class="special-feature feature--2">
                        <img src="{{ asset('default/images/spf2.png')}}" alt="Special Feature image">
                        <h3 class="special__feature-title">Fast and Friendly
                            <span class="highlight">Support</span>
                        </h3>
                    </div>
                </div>
                <!-- end /.col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END SPECIAL FEATURES AREA
=================================-->

    <!--================================
    START CALL TO ACTION AREA
=================================-->
    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="{{ asset('default/images/calltobg.jpg')}}" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Ready to Join Our Marketplace!</h1>
                        <h4 class="text--white">Over 25,000 designers and developers trust the MartPlace.</h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection