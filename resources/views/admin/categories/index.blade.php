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
                                    <h4 class="mb-0 font-size-18">Categories</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Categories</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">All Categories</h4>
                                        <button type="button" class="btn btn-primary btn-md btn-rounded waves-effect waves-light mb-4" data-toggle="modal" data-target=".exampleModal">
                                            + Add New Category
                                        </button>
                                        @if(Session::has('success_message'))
                                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{Session::get('success_message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                                        </div>
                                        @endif
                                        <div class="table-responsive">
                                            @if(count($categories) > 0)
                                          
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Name</th>
                                                        <th>Section</th>
                                                        <th>Parent Category</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Date Created</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    ?>
                                                    @foreach($categories as $category)
                                                    
                                                    @if(!isset($category->parentcategory['name']))
                                                    <?php $parentcategory = "Root"; ?>
                                                    @else
                                                    <?php $parentcategory = $category->parentcategory['name'];?>
                                                    @endif
                                                    <tr>
                                                       <td>{{$no++}}</a> </td>
                                                        <td>
                                                            {{$category->name}}
                                                        </td>
                                                        <td>
                                                            {{$category->section->name}}
                                                        </td>
                                                        <td>
                                                            {{$parentcategory}}
                                                        </td>
                                                        <td>
                                                            {{$category->name}}
                                                        </td>
                                                        <td>
                                                            @if($category->status ==1)
                                                        <a class="updatecategorystatus" id="cat{{$category->id}}" cat_id="{{$category->id}}" href="javascript:void(0)">Active</a>
                                                            @else
                                                            <a class="updatecategorystatus" id="cat{{$category->id}}" cat_id="{{$category->id}}" href="javascript:void(0);">Inactive</a>
                                                         @endif
                                                          
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                        <a class="btn btn-primary" href="{{url('admin/editcategory')}}/{{$category->id}}">Edit</a>
                                                        <a href="javascript:(0);" class="confirmDelete btn btn-danger" record="category" recordid="{{$category->id}}">Delete</a>
                                   </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                        @else
                                        <div class="col-md-12 alert alert-danger" style="text-align: center;">No Categories yet</div>
                                        
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

                    <!-- Modal -->
                    <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <form action="{{url('admin/addcategory')}}" method="POST" class="form-horizontal" name="categoryForm" id="categoryForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="col-md-12">Name</label>
                                            <div class="col-md-12">
                                                <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name"> 
                                            </div>
                                        </div>
                            
                                        <div class="form-group">
                                            <label class="col-md-12">Section</label>
                                            <div class="col-md-12">
                                            <select name="section_id" id="section_id" class="form-control @error('section_id') is-invalid @enderror">
                                                <option>Select</option>
                                                @foreach($sections as $section)
                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                    <div id="appendCategoriesLevel">
                                        @include('admin.categories.append-categories')
                                    </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Description</label>
                                            <div class="col-md-12">
                                            <textarea name="description" id="" cols="30" rows="10"  class="form-control"  placeholder="Enter Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Meta Title</label>
                                            <div class="col-md-12">
                                            <textarea name="meta_title" id="" cols="30" rows="10"  class="form-control"  placeholder="Enter Meta Title"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Image</label>
                                            <div class="col-md-12">
                                            <input type="file"  class="form-control" name="image" > 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Meta Description</label>
                                            <div class="col-md-12">
                                            <input type="text" placeholder="Enter Meta Description" class="form-control" name="meta_description"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Discount</label>
                                            <div class="col-md-12">
                                            <input type="text" placeholder="Enter Maximum Returns" class="form-control" name="discount" placeholder="Enter Discount"> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Meta Keywords</label>
                                            <div class="col-md-12">
                                            <textarea name="meta_keywords" id="" class="form-control" cols="30" rows="10" placeholder="Enter Meta Keywords"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">URL</label>
                                            <div class="col-md-12">
                                            <input type="text" placeholder="Enter Maximum Returns" class="form-control" name="url" placeholder="Enter URL"> 
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-info" >Submit</button>
                                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">Exit</button>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    
                    </div>
            
                <!-- end modal -->

            </div>

@endsection