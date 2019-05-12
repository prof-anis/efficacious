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
    <div>
    	@if(session()->has('status'))
    	{{session('status')}}
    	@endif

    </div>
    <section class="dashboard-area dashboard_purchase">
       
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="modules__content">
                            <div class="table_module">
                                <div class="table_header">
                                    <h3>Purchase History</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table withdraw__table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Product</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        	@forelse($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transaction->reference }}</td>
                                                <td>{{ $transaction->created_at }}</td>
                                                <td class="bold">{{ $transaction->product->amount }}</td>
                                                <td class="bold">
                                                    {{ $transaction->product->name }}
                                                </td>
                                                  <td class="bold">
                                                    {{  $transaction->status }}</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <p style="color: red">No transaction has been made so far!</p>
                                            @endforelse
                                            
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