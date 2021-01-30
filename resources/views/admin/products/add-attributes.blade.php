@extends('layouts.backend.app')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Products Attributes</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Products Attributes</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                
                <div class="col-lg-12">
                    <a href="../../admin/products" class="btn btn-primary mb-4">Back</a>
                    @if ($errors->any())
                                            <div class="alert alert-danger" style="margin-top: 10px">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                            @endif
                    @if(Session::has('success_message'))
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{Session::get('success_message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                                        </div>
                                        @endif

                                        @if(Session::has('error_message'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{Session::get('error_message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                                        </div>
                                        @endif
                                       
                    <div class="card">
                        <div class="card-body">
                        <form action="{{url('admin/add-attributes/'.$productData['id'])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            Product Name: {{$productData['name']}} </div>
                                            <div class="form-group">
                                                <label for="">Price</label>
                                                Product Price: {{$productData['price']}}  </div>
                                                <div class="form-group">
                                                    <label for="">Discount</label>
                                                    Product Discount: {{$productData['discount']}}
                                                </div>
                                            </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @if(!empty($productData['image']))
                                            <img src="{{asset('images/products/small/'.$productData['image'])}}" alt="" style="width: 10%">
                                          @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="field_wrapper">
                                                <div>
                                                    <input type="number"  id="stock" name="stock[]" placeholder="Stock" value="" style="width: 40%" required>
                                                    <input type="number"  id="price" name="price[]" placeholder="Price" value="" style="width: 40%" required>
                                                    {{-- <a href="javascript:void(0);" class="add_button" title="Add field">Add --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Add Attribute</button>
                                </div>
                            </form>
                        </div>
                    </div>


                
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Added Product Attributes</h4>
                            <div class="table-responsive">
                                @if(count($productData['attributes']) > 0)
                              
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <form action="{{ url('admin/edit-attributes/'.$productData['id']) }}" method="post" >
                                        @csrf
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        ?>
                                        @foreach($productData['attributes'] as $attribute)
                                       <input type="hidden" name="attrId[]" value="{{$attribute['id']}}">
                                        <tr>
                                           <td>{{$no++}}</a> </td>
                                            <td>
                                             
                                                <input type="number" name="price[]" value="{{$attribute['price']}}" required>
                                            </td>
                                           <td>
                                            <input type="number" name="stock[]" value="{{$attribute['stock']}}" required>
                                           </td>
                                           <td>
                                            @if($attribute->status ==1)
                                            <a class="updateattributestatus" id="attribute-{{$attribute->id}}" attribute_id="{{$attribute->id}}" href="javascript:void(0)">Active</a>
                                                @else
                                                <a class="updateattributestatus" id="attribute-{{$attribute->id}}" attribute_id="{{$attribute->id}}" href="javascript:void(0);">Inactive</a>
                                             @endif
                                           </td>
                                           
                                            <td>
                                            <a title="Delete Product Attribute" href="javascript:(0);" class="confirmDelete btn btn-danger" record="product-attribute" recordid="{{$attribute->id}}"><i class="fa fa-trash"></i></a>
                                        </tr>

                                        @endforeach
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Update Attribute</button>
                                        </div>
                                    </tbody>
                                   
                                   </form>
                                        @else
                                        <div class="col-md-12 alert alert-danger" style="text-align: center;">No attribute for this product yet</div>
                                        
                                            @endif
                                       
                                </table>
                               
                            </div>
                            
                           <!-- end table-responsive -->
                        </div>
                    </div>
                </div>


            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>

@endsection