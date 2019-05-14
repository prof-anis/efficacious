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
                                <a href="#">Upload Item</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Upload Item</h1>
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

@if(session()->has('status'))
        <div class="alert alert-success" role="alert">
                                <span class="alert_icon lnr lnr-checkmark-circle"></span>
                                <strong>{{  session('status') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
@endif



    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
               

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>Upload Your Item</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="{{ route('seller.product.update',['id'=>$product->id]) }}" method="POST">
                            @csrf
                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>Item Name & Description</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                   
                                     <div class="form-group">
                                        <label for="category">Product type</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="type" id="selectCategory" class="text_field"  >
                                                <option value="goods" id="selectGoods"  @if($product->type == 'goods') selected="true" @endif  >Goods</option>
                                                <option value="services" id="selectServices" 

                                                 @if($product->type == "services") selected="true" @endif
                                                    >Services</option>
                                             
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="category">Select Category</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="category" id="category" class="text_field">
                                                @foreach($cats as $cat)
                                                <option value="{{ $cat->id }}"  @if($product->category_id == $cat->id) selected="true" @endif>{{$cat->name}}</option>
                                                
                                                @endforeach

                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_name">Product Name
                                            <span>(Max 100 characters)</span>
                                        </label>
                                        <input type="text" id="product_name" class="text_field" placeholder="Enter your product name here..." name="name"  value="{{ $product->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <span>Short Description</span>
                                        </label>
                                        <textarea name="description" >{{$product->description}}</textarea>
                                    </div>

                                    <div class="form-group no-margin">
                                        <p class="label">Long Description</p>
                                        <div id="trumbowyg-demo">{{ $product->long_description }}</div>
                                    </div>
                                </div>
                                <!-- end /.modules__content -->
                            </div>
                            <!-- end /.upload_modules -->

                            <div class="upload_modules module--upload">
                                <div class="modules__title">
                                    <h3>Upload Files</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p>Upload Thumbnail
                                                <span>(JPEG or PNG 100x100px)</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="thumbnail">
                                                    <input type="file" id="thumbnail" class="files">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div>
                                            <!-- end /.custom_upload -->

                                            <div class="progress_wrapper">
                                                <div class="labels clearfix">
                                                    <p>Thumbnail.jpg</p>
                                                    <span data-width="89">89%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end /.progress_wrapper -->

                                            <span class="lnr upload_cross lnr-cross"></span>
                                        </div>
                                        <!-- end /.upload_wrapper -->
                                    </div>
                                    <!-- end /.form-group -->

                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p>Upload Main File
                                                <span>(ZIP - All files)</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="main_file">
                                                    <input type="file" id="main_file" class="files">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div>
                                            <!-- end /.custom_upload -->

                                            <div class="progress_wrapper">
                                                <div class="labels clearfix">
                                                    <p>WordPress Blog Theme.zip</p>
                                                    <span data-width="90">90%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                        <span class="sr-only">90% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end /.progress_wrapper -->

                                            <span class="lnr upload_cross lnr-cross"></span>
                                        </div>
                                        <!-- end /.upload_wrapper -->
                                    </div>
                                    <!-- end /.form-group -->

                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p>Upload Screenshots
                                                <span>(ZIP file of images)</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="screenshot">
                                                    <input type="file" id="screenshot" class="files">
                                                    <span class="btn btn--round btn--sm">Choose File</span>
                                                </label>
                                            </div>
                                            <!-- end /.custom_upload -->

                                            <div class="progress_wrapper">
                                                <div class="labels clearfix">
                                                    <p>Thumbnail.jpg</p>
                                                    <span data-width="78">78%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                                        <span class="sr-only">78% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end /.progress_wrapper -->

                                            <span class="lnr upload_cross lnr-cross"></span>
                                        </div>
                                        <!-- end /.upload_wrapper -->
                                    </div>
                                    <!-- end /.form-group -->
                                </div>
                                <!-- end /.upload_modules -->
                            </div>
                            <!-- end /.upload_modules -->

                            <div class="upload_modules with--addons">
                                <div class="modules__title">
                                    <h3>Other Informations</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rlicense">minimum price</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="rlicense" class="text_field" placeholder="00.00" name="price_start" value="{{ $product->amount }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exlicense">maximum price</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" id="exlicense" class="text_field" placeholder="00.00" name="price_end">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.col-md-6 -->

                                    </div>
                                    <!-- end /.row -->
                                  
                                </div>
                                <!-- end /.modules__content -->
                            </div>
                            <!-- end /.upload_modules -->

                            <!-- submit button -->
                            <button type="submit" class="btn btn--round btn--fullwidth btn--lg">Submit Your Item for Review</button>
                        </form>
                    </div>
                    <!-- end /.col-md-8 -->

                    <div class="col-lg-4 col-md-5">
                        <aside class="sidebar upload_sidebar">
                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>Quick Upload Rules</h3>
                                </div>

                                <div class="card_content">
                                    <div class="card_info">
                                        <h4>Image Upload</h4>
                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris
                                            que the mattis interdum.</p>
                                    </div>

                                    <div class="card_info">
                                        <h4>File Upload</h4>
                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris
                                            que the mattis interdum.</p>
                                    </div>

                                    <div class="card_info">
                                        <h4>Vector Upload</h4>
                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris
                                            que the mattis interdum.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>Trouble Uploading?</h3>
                                </div>

                                <div class="card_content">
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut sceler isque the
                                        mattis, leo quam aliquet congue.</p>
                                    <ul>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>More Upload Info</h3>
                                </div>

                                <div class="card_content">
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut sceler isque the
                                        mattis, leo quam aliquet congue.</p>
                                    <ul>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the labore et dolore magna.</li>
                                        <li>Consectetur elit, sed do eiusmod the</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->
                        </aside>
                        <!-- end /.sidebar -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
    <script src="{{ asset('default/js/vendor/jquery/jquery-1.12.3.js')}}"></script>
  
    <script type="text/javascript">

        $(document).ready(function(){

            $('#selectGoods').click(function(){
               var url="{{route('api.get.cat',['type'=>'goods'])}}";

                $.get(url,function(info){
                  if(info.code == 200)
                  {
                    var html='';

                    for (var i = 0; i < info.data.length; i++) {
                       var html=html + "<option value="+info.data[i].id+">"+info.data[i].name+"</option>";
                    }

                    $('#category').html(html);
                  }
                })
                .fail(function(info){
                    console.log(info);
                })


            })

            $('#selectServices').click(function(){
            
               var url="{{route('api.get.cat',['type'=>'services'])}}";

                $.get(url,function(info){
                  if(info.code == 200)
                  {
                    var html='';

                    for (var i = 0; i < info.data.length; i++) {
                       var html=html + "<option value="+info.data[i].id+">"+info.data[i].name+"</option>";
                    }

                    $('#category').html(html);
                  }
                })
                .fail(function(info){
                    console.log(info);
                })

                
            })
        })
    </script>
@endsection