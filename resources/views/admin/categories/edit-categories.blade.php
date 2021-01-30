@extends('layouts.backend.app')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit Category</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                
                <div class="col-lg-12">
                    <a href="../../admin/categories" class="btn btn-primary mb-4">Back</a>
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
                        <form action="{{url('admin/editcategory')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="category_id" value="{{$categoryData->id}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{$categoryData->name}}"> 
                                                                   
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Section</label>
                                            <select name="section_id" id="section_id" class="form-control @error('section_id') is-invalid @enderror">
                                                <option>Select</option>
                                                @foreach($sections as $section)
                                              <option value="{{$section->id}}" @if(!empty($categoryData['section_id']) && $categoryData['section_id']==$section->id) selected @endif>{{$section->name}}</option>
                                                @endforeach
                                            </select>
                                         
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin: 0; padding: 0">
                                        <div id="appendCategoriesLevel">
                                            @include('admin.categories.append-categories')
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file"  class="form-control @error('min_return') is-invalid @enderror" name="image"> 
              <div class="image">
                @if(!empty($categoryData['image']))
                <img src="{{asset('images/categories/'.$categoryData['image'])}}" alt="" style="width: 10%">
                &nbsp;
              <a href="javascript:void(0);" class="confirmDelete" record="category-image" recordid="{{$categoryData['id']}}">Delete Image</a>
              @endif
            
              </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="3"  class="form-control"  placeholder="Enter Description">{{$categoryData->description}}</textarea>                         
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Meta Title</label>
                                            <textarea name="meta_title" id="" cols="30" rows="3"  class="form-control"  placeholder="Enter Meta Title">{{$categoryData->meta_title}}</textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Meta Description</label>
                                            <input type="text" placeholder="Enter Meta Description" class="form-control" name="meta_description" value="{{$categoryData->meta_description}}"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Discount</label>
                                            <input type="text" class="form-control" name="discount" placeholder="Enter Discount" value="{{$categoryData->discount}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Meta Keywords</label>
                                            <textarea name="meta_keywords" id="" class="form-control" cols="30" rows="3" placeholder="Enter Meta Keywords">{{$categoryData->meta_keywords}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">URL</label>
                                            <input type="text" class="form-control" name="url" placeholder="Enter URL" value="{{$categoryData->url}}"> 
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