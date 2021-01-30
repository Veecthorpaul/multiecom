@extends('layouts.backend.app')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">{{$title}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">{{$title}}</li>
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
                                       
                    <div class="card">
                        <div class="card-body">
                        <form @if(empty($productData['id'])) action="{{url('admin/add-edit-product')}}" @else action="{{url('admin/add-edit-product/'.$productData['id'])}}" @endif method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" @if(!empty($productData['name'])) value="{{$productData['name']}}" @else value="{{ old('name')}}" @endif  required> 
                                                                   
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="category_id" id="category_id" class="form-control @error('section_id') is-invalid @enderror" required>
                                                <option>Select</option>
                                                @foreach($categories as $section)
                                              <optgroup label="{{$section->name}}"></optgroup>
                                            @foreach($section['categories'] as $category)
                                            <option value="{{$category['id']}}" @if(!empty(@old('category_id')) && $category['id']==@old('category_id'))  selected="" @elseif(!empty($productData['category_id']) && $productData['category_id']==$category['id']) selected="" @endif>&nbsp;-&nbsp;&nbsp;{{$category['name']}}</option>
                                            @foreach($category['subcategories'] as $subcategory)
                                            <option value="{{$subcategory['id']}}" @if(!empty(@old('category_id')) && $subcategory['id']==@old('category_id')) selected="" @elseif(!empty($productData['category_id']) && $productData['category_id']==$subcategory['id']) selected="" @endif>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;{{$subcategory['name']}}</option>
                                            @endforeach
                                            @endforeach
                                              @endforeach
                                            </select>
                                         
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Select Brand</label>
                                            <select name="brand_id" id="" class="form-control @error('section_id') is-invalid @enderror" required>
                                            <option value=""></option>
                                            @foreach($brands as $brand)
                                        <option value="{{$brand['id']}}" @if(!empty($productData['brand_id']) && $productData['brand_id']==$brand['id']) selected="" @endif>{{$brand['name']}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file"  class="form-control " name="image"> 
              <div class="image">
                @if(!empty($productData['image']))
                <img src="{{asset('images/products/small/'.$productData['image'])}}" alt="" style="width: 10%">
                &nbsp;
              <a href="javascript:void(0);" class="confirmDelete" record="product-image" recordid="{{$productData['id']}}">Delete Image</a>
              @endif
            
              </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="text" class="form-control" name="price" placeholder="Enter Price" @if(!empty($productData['price'])) value="{{$productData['price']}}" @else value="{{ old('price')}}" @endif required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Discount (%)</label>
                                            <input type="text" class="form-control" name="discount" placeholder="Enter Discount" @if(!empty($productData['discount'])) value="{{$productData['discount']}}" @else value="{{ old('discount')}}" @endif>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <input type="text" placeholder="Enter Meta Description" class="form-control" name="meta_description" @if(!empty($productData['meta_description'])) value="{{$productData['meta_description']}}" @else value="{{ old('meta_description')}}" @endif> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="3"  class="form-control"  placeholder="Enter Description" required>@if(!empty($productData['description'])) {{$productData['description']}} @else {{ old('description')}}  @endif</textarea>                         
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Meta Title</label>
                                            <textarea name="meta_title" id="" cols="30" rows="3"  class="form-control"  placeholder="Enter Meta Title">@if(!empty($productData['meta_title'])) {{$productData['meta_title']}} @else {{ old('meta_title')}}  @endif</textarea>
                                        </div>
                                    </div>  
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Meta Keywords</label>
                                            <input type="text" placeholder="Enter Meta Keywords" class="form-control" name="meta_keywords" @if(!empty($productData['meta_keywords'])) value="{{$productData['meta_keywords']}}" @else value="{{ old('meta_keywords')}}" @endif>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Product Code</label>
                                            <input type="text" placeholder="Enter Product Code" class="form-control" name="code" @if(!empty($productData['code'])) value="{{$productData['code']}}" @else value="{{ old('code')}}" @endif required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Featured</label>
                                            <input type="checkbox" class="form-control" name="is_featured" value="Yes" style="width: 7%" @if(!empty($productData['is_featured']) && $productData['is_featured']=="Yes") checked="" @endif>
                                        </div>
                                    </div>
                                  
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>

@endsection