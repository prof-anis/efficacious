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
                                <a href="customer-dashboard.html">Customer Info</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Customer Info</h1>
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
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li>
                                <a href="#" id="change">
                                    <span class="fa fa-edit"></span>Edit</a>
                            </li>
                           
                        </ul>
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Account Settings </h3>
                                <a href="#" class="btn btn--sm">See all Items</a>
                               
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <form action="{{ route('customer.profile.update') }}" method="POST" class="setting_form">
                	@csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="information_module">
                                <a class="toggle_title">
                                    <h4>Personal Information</h4>
                                </a>

                                <div class="information__set toggle_module">
                                    <div class="information_wrapper form--fields">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="fname" class="text_field" placeholder="First name" value="{{  $user->first_name}}" name="first_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" class="text_field" placeholder="Last Name" value="{{ $user->last_name }}" name="last_name">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="emailad">Primary Email Address</label>
                                            <input type="text" id="emailad" class="text_field" placeholder="Email address" value="{{ $user->email}}" name="email">
                                        </div>
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="information_module">
                                <a class="toggle_title">
                                    <h4>Change Billing Address</h4>
                                </a>

                                <div class="information__set toggle_module">
                                    <div class="information_wrapper form--fields">
                                        <div class="form-group">
                                            <label for="address1">Address Line 1</label>
                                            <input type="text" id="address1" class="text_field" placeholder="Address line one" name="address" value="{{$user->address }}">
                                        </div>

                                       
                                        <div class="form-group">
                                            <label for="city">City / State
                                                <sup>*</sup>
                                            </label>
                                            <select name="city" id="city" class="text_field">
                                                @for($i=1;$i<5;$i++)
                                                <option value="{{$i}}" 

                                                @if($user->address == $i) selected="true"
                                                 @endif

                                                  >{{$i}} one</option>
                                                @endfor
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="zipcode">Zip / Postal Code
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" id="zipcode" class="text_field" placeholder="zip/postal code" value="{{ $user->postal_code}}" name="postal_code">
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country
                                                <sup>*</sup>
                                            </label>
                                            <select name="country" id="country" class="text_field">
                                                <option value="">Select one</option>
                                                <option value="dhaka">Dhaka</option>
                                                <option value="sydney">Sydney</option>
                                                <option value="newyork">New York</option>
                                                <option value="london">London</option>
                                                <option value="mexico">New Mexico</option>
                                            </select>
                                        </div>
                                      
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->

                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md" id="save_button">Save Change</button>
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </form>
                <!-- end /form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function(){
			$('#save_button').hide();
		$(':input').each(function(){
			$(this).attr('readonly',true).attr('disabled',true);
		})




		$('#change').click(function(e){
			e.preventDefault();

			$(':input').each(function(){
				$(this).attr('readonly',false).attr('disabled',false);
			})
			$('#save_button').show();

			
		})

	})
</script>
@endsection