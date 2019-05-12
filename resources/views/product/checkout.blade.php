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
                                <a href="#">Checkout</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Checkout</h1>
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
    <section class="dashboard-area">
        <div class="dashboard_contents">
            <div class="container">
                <form action="{{ route('product.checkout.store') }}" method="POST" class="setting_form">

                    @csrf

                    <input type="hidden" name="productId" value="{{ $productId }}">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="information_module">
                                <div class="toggle_title">
                                    <h4>Biling Information </h4>
                                </div>

                                <div class="information__set">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first_name">First Name
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="first_name" class="text_field" value="{{ Auth::user()->first_name ?? "" }}" name="first_name">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="last_name">last Name
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="last_name" class="text_field" value="{{ Auth::user()->last_name ??  "" }}" name="last_name">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.row -->

                                       

                                        <div class="form-group">
                                            <label for="email1">Email Adress
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="email1" class="text_field"   name="email" value="{{ Auth::user()->email ?? "" }}">
                                        </div>

                                      @if(!Auth::check())

                                          <div class="form-group">
                                            <label for="email1">Password
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="" class="text_field"   name="password" >
                                        </div>

                                         @endif



                                        <div class="form-group">
                                            <label for="country1">Country
                                                <sup>*</sup>
                                            </label>
                                            <div class="select-wrap select-wrap2">
                                                <select name="country" id="country1" class="text_field" name="country">
                                                    <option value="">Select one</option>
                                                    <option value="bangladesh">Bangladesh</option>
                                                    <option value="india">India</option>
                                                    <option value="uruguye">Uruguye</option>
                                                    <option value="australia">Australia</option>
                                                    <option value="neverland">Neverland</option>
                                                    <option value="atlantis">Atlantis</option>
                                                </select>
                                                <span class="lnr lnr-chevron-down"></span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="address1">Billing address</label>
                                            <input type="text" id="address1" class="text_field" placeholder="Address line one" name="address">
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city">City / State
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select name="city" id="city" class="text_field" name="city">
                                                            <option value="">Select one</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="sydney">Sydney</option>
                                                            <option value="newyork">New York</option>
                                                            <option value="london">London</option>
                                                            <option value="mexico">New Mexico</option>
                                                        </select>
                                                        <span class="lnr lnr-chevron-down"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="zipcode">Zip / Postal Code
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" id="zipcode" class="text_field" placeholder="zip/postal code" name="postal_code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="information_module order_summary">
                                <div class="toggle_title">
                                    <h4>Order Summary</h4>
                                </div>

                                <ul>
                                    @foreach($products as $product)
                                    <li class="item">
                                        <a href="{{route('product.show',['id'=>$product->id])}}" target="_blank">{{$product['name']}}</a>
                                        <span>${{$product['amount'] }}</span>
                                    </li>
                                    @endforeach
                                   
                                    <li class="total_ammount">
                                        <p>Total</p>
                                        <span>${{ $total }}</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.information_module-->

                            <div class="information_module payment_options">
                                <div class="toggle_title">
                                    <h4>Select Payment Method</h4>
                                </div>

                                <ul>
                                    {{--
                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="opt1" class="" name="filter_opt">
                                            <label for="opt1">
                                                <span class="circle"></span>Credit Card</label>
                                        </div>
                                        <img src="images/cards.png" alt="Visa Cards">
                                    </li>

                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="opt2" class="" name="filter_opt">
                                            <label for="opt2">
                                                <span class="circle"></span>Paypal</label>
                                        </div>
                                        <img src="images/paypal.png" alt="Visa Cards">
                                    </li>

                                    --}}

                                    <li>
                                        <div class="custom-radio">
                                            <input type="radio" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>Pay on delievery</label>
                                        </div>
                                       
                                    </li>
                                </ul>

                                {{--
                                <div class="payment_info modules__content">
                                    <div class="form-group">
                                        <label for="card_number">Card Number</label>
                                        <input id="card_number" type="text" class="text_field" placeholder="Enter your card number here...">
                                    </div>

                                    <!-- lebel for date selection -->
                                    <label for="name">Expire Date</label>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="select-wrap select-wrap2">
                                                    <select name="months" id="name">
                                                        <option value="">Month</option>
                                                        <option value="jan">jan</option>
                                                        <option value="feb">Feb</option>
                                                        <option value="mar">Mar</option>
                                                        <option value="apr">Apr</option>
                                                        <option value="may">May</option>
                                                        <option value="jun">Jun</option>
                                                        <option value="jul">Jul</option>
                                                        <option value="aug">Aug</option>
                                                        <option value="sep">Sep</option>
                                                        <option value="oct">Oct</option>
                                                        <option value="nov">Nov</option>
                                                        <option value="dec">Dec</option>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                                <!-- end /.select-wrap -->
                                            </div>
                                            <!-- end /.form-group -->
                                        </div>
                                        <!-- end /.col-md-6-->

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="select-wrap select-wrap2">
                                                    <select name="years" id="years">
                                                        <option value="">Year</option>
                                                        <option value="28">2028</option>
                                                        <option value="27">2027</option>
                                                        <option value="26">2026</option>
                                                        <option value="25">2025</option>
                                                        <option value="24">2024</option>
                                                        <option value="23">2023</option>
                                                        <option value="22">2022</option>
                                                        <option value="21">2021</option>
                                                        <option value="20">2020</option>
                                                        <option value="19">2019</option>
                                                        <option value="18">2019</option>
                                                        <option value="17">2019</option>
                                                    </select>
                                                    <span class="lnr lnr-chevron-down"></span>
                                                </div>
                                                <!-- end /.select-wrap -->
                                            </div>
                                            <!-- end /.form-group -->
                                        </div>
                                        <!-- end /.col-md-6-->
                                    </div>
                                    <!-- end /.row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cv_code">CVV Code</label>
                                                <input id="cv_code" type="text" class="text_field" placeholder="Enter code here...">
                                            </div>

                                            <button type="submit" class="btn btn--round btn--default">Confirm Order</button>
                                        </div>
                                    </div>
                                </div>

                                --}}
                                <div>
                                    <center>
                                        <button type="submit" class="btn btn--round btn--default">Confirm Order</button>
                                    </center>
                                
                            </div>

                            </div>
                            <!-- end /.information_module-->
                        </div>
                        <!-- end /.col-md-6 -->
                    </div>
                    <!-- end /.row -->
                </form>
                <!-- end /form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>

    @endsection