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
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <a href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Author's Settings</h1>
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
            START DASHBOARD AREA
    =================================-->
    <section class="dashboard-area dashboard_purchase">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                   

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-bar clearfix filter-bar2">

                            <div class="dashboard__title pull-left">
                                <h3>Your Orders</h3>
                            </div>

                          
                            <!-- end /.pull-right -->
                        </div>
                        <!-- end /.filter-bar -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="product_archive">
                    <div class="title_area">
                        <div class="row">
                            <div class="col-md-5">
                                <h4>Product Details</h4>
                            </div>
                            <div class="col-md-3">
                                <h4 class="add_info">Additional Info</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Price</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Status</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @forelse($transactions as $transaction)
                        <div class="col-md-12">
                            <div class="single_product clearfix">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5">
                                        <div class="product__description">
                                            <img src="images/pur1.jpg" alt="Purchase image">
                                            <div class="short_desc">
                                                <h4>Finance and Consulting Business Theme</h4>
                                                <p>Nunc placerat mi id nisi inter dum mollis. Praesent phare...</p>
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-3 col-6 xs-fullwidth">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    <p>
                                                        <span>Date: </span> 26 Jun 2016</p>
                                                </li>
                                                <li class="license">
                                                    <p>
                                                        <span>Licence:</span> Regular</p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span>Author:</span> AazzTech</p>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="images/catword.png" alt="">Wordpress</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span>$59</span>
                                            </div>
                                            <div class="item_action v_middle">
                                                <a href="#" class="btn btn--md btn--round">Download Item</a>
                                                <a href="#" class="btn btn--md btn--round btn--white rating--btn not--rated" data-toggle="modal" data-target="#myModal">
                                                    <P class="rate_it">Rate Now</P>
                                                    <div class="rating product--rating">
                                                        <ul>
                                                            <li>
                                                                <span class="fa fa-star-o"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star-o"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star-o"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star-o"></span>
                                                            </li>
                                                            <li>
                                                                <span class="fa fa-star-o"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                                <!-- end /.rating_btn -->
                                            </div>
                                            <!-- end /.item_action -->
                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                            </div>
                            <!-- end /.single_product -->
                        </div>
                        @empty
                        <p style="color: red">No order has been made for any of your products yet!</p>
                        @endforelse

                       
                        </div>

                        <div class="col-md-12">
                            <div class="pagination-area pagination-area2">
                                <nav class="navigation pagination " role="navigation">
                                    <div class="nav-links">
                                        <a class="prev page-numbers" href="#">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                        <a class="page-numbers current" href="#">1</a>
                                        <a class="page-numbers" href="#">2</a>
                                        <a class="page-numbers" href="#">3</a>
                                        <a class="next page-numbers" href="#">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                            <!-- end /.pagination-area -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.product_archive2 -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
@endsection