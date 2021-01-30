@extends('layouts.backend.app')
@section('content')
   <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Products</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Products</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">All Products</h4>
                                    <a href="{{url('admin/add-edit-product')}}" class="btn btn-primary btn-md btn-rounded waves-effect waves-light mb-4">+ Add New Product</a>
                                        @if(Session::has('success_message'))
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{Session::get('success_message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                                        </div>
                                        @endif
                                        <div class="table-responsive">
                                            @if(count($products) > 0)
                                          
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Category</th>
                                                        <th>Section</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    ?>
                                                    @foreach($products as $product)
                                                   
                                                    <tr>
                                                       <td>{{$no++}}</a> </td>
                                                        <td>
                                                            {{$product->name}}
                                                        </td>
                                                        <td>
                                                            {{$product->price}}
                                                        </td>
                                                       <td>
                                                        {{$product->category->name}}
                                                       </td>
                                                       <td>
                                                        {{$product->section->name}}
                                                       </td>
                                                    <td>
                                                        <?php 
                                                        $product_image_path = "images/products/small/".$product->image;    
                                                        ?>
                                                        @if(!empty($product->image) && file_exists($product_image_path))
                                                        <img src="{{asset('images/products/small/'.$product->image)}}" alt="" width="20%">
                                                        @else
                                                        <img src="{{asset('images/products/small/noimage.png')}}" alt="" width="20%">
                                                    @endif
                                                    </td>
                                                        <td>
                                                            @if($product->status==1)
                                                        <a class="updateproductstatus" id="product-{{$product->id}}" product_id="{{$product->id}}" href="javascript:void(0)">Active</a>
                                                            @else
                                                            <a class="updateproductstatus" id="product-{{$product->id}}" product_id="{{$product->id}}" href="javascript:void(0);">Inactive</a>
                                                         @endif
                                                          
                                                        </td>
                                                        <td>
                                                            
                                                        <a title="Add Attributes" class="btn btn-warning" href="{{url('admin/add-attributes')}}/{{$product->id}}"><i class="fa fa-plus"></i></a>
                                                        <a title="Add Images" class="btn btn-warning" href="{{url('admin/add-images')}}/{{$product->id}}"><i class="fa fa-plus-circle"></i></a>
                                                        <a title="Edit Product" class="btn btn-primary" href="{{url('admin/add-edit-product')}}/{{$product->id}}"><i class="fa fa-edit"></i></a>
                                                        <a title="Delete Product" href="javascript:(0);" class="confirmDelete btn btn-danger" record="product" recordid="{{$product->id}}"><i class="fa fa-trash"></i></a>
                                   </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                        @else
                                        <div class="col-md-12 alert alert-danger" style="text-align: center;">No Products yet</div>
                                        
                                            @endif
                                       <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

@endsection