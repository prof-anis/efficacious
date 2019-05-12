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
                                <a href="customer-dashboard.html">Customer Dashboard</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Customer Dashboard</h1>
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
       
        <!-- end /.dashboard_menu_area -->
@if(session()->has('status'))
        <div class="alert alert-success" role="alert">
                                <span class="alert_icon lnr lnr-checkmark-circle"></span>
                                <strong>{{  session('status') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
@endif



        <div class="dashboard_contents">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="modules__content">
                            <div class="table_module">
                                <div class="table_header">
                                    <h3>My cart</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table withdraw__table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Amount</th>
                                                <th>status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        	@foreach($carts as $cart)
                                            <tr>
                                                <td>
                                                	<img src="{{ $cart->product->image_url }}" width="100"  height="100" style="border-radius: 100px">
                                                </td>
                                                <td>{{ $cart->product->amount }}</td>
                                                <td class="bold"> available</td>
                                                <td class="bold">
                                                	<form method="POST" action="{{ route('product.cart.remove') }}">
                                                		@csrf
                                                		<input type="hidden" name="cartId" value="{{  $cart->id}}">
                                                		{{method_field('delete')}}
                                                    <button class="btn btn-danger"></i>delete</button>
                                                </form>
                                                    <a class="btn btn-danger" href=""></i>delete</a>


                                                </td>
                                            </tr>

                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->


@endsection