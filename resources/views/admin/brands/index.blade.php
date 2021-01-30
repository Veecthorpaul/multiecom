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
                                    <h4 class="mb-0 font-size-18">Brands</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Brands</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">All Brands</h4>
                                        <button type="button" class="btn btn-primary btn-md btn-rounded waves-effect waves-light mb-4" data-toggle="modal" data-target=".exampleModal">
                                            + Add New Brand
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
                                            @if(count($brands) > 0)
                                          
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    ?>
                                                    @foreach($brands as $brand)
                                                      {{-- Edit Brand Modal --}}
                <div id="edit{{$brand->id}}" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Edit Brand</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{url('admin/edit-brand')}} " method="POST" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="brand_id" value="{{$brand->id}}">
                        <div class="modal-body">
                            <div class="form-group">
                                  <label class="col-md-12">Brand Name</label>
                                  <div class="col-md-12">
                                    <input type="text" value="{{$brand->name}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter brand Name"> 
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" >Submit</button>
                          <button type="button" class="btn btn-default float-right" data-dismiss="modal">Exit</button>
                        </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                </div>
                                                    <tr>
                                                       <td>{{$no++}}</a> </td>
                                                        <td>
                                                            {{$brand->name}}
                                                        </td>
                                                        <td>
                                                            @if($brand->status==1)
                                                        <a class="updatebrandstatus" id="brand-{{$brand->id}}" brand_id="{{$brand->id}}" href="javascript:void(0)"><i class="fa fa-toggle-on" status="Active"></i></a>
                                                            @else
                                                        <a class="updatebrandstatus" id="brand-{{$brand->id}}" brand_id="{{$brand->id}}" href="javascript:void(0)"><i class="fa fa-toggle-off" status="Inactive"></a>
                                                         @endif  
                                                        </td>
                                                       
                                                        <td>
                                                            <button title="Edit Brand" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$brand->id}}"><i class="fa fa-edit"></i></button>
                                                            <a title="Delete Brand" href="javascript:(0);" class="confirmDelete btn btn-danger" record="brand" recordid="{{$brand->id}}"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                       
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                        @else
                                        <div class="col-md-12 alert alert-danger" style="text-align: center;">No brand yet</div>
                                        
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
                                <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{url('admin/add-brand')}}" method="POST" class="form-horizontal">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                          <label class="col-md-12">Brand Name</label>
                                          <div class="col-md-12">
                                          <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Brand Name" required> 
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
      
            </div>
            <!-- end main content-->
@endsection