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
                                    <h4 class="mb-0 font-size-18"></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Change Password</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card"> 
                                    <div class="card-body">
										<form role="form" action="{{ url('/admin/changepassword') }}" method="POST" name="updatePassword" id="updatePassword">
											@csrf
                                            @if(Session::has('error_message'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session::get('error_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
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
                                            <div class="row">
                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $adminDetails->name }}" name="name" id="name">
												</div>
                                                </div> --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom01">Email</label>
                                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $adminDetails->email }}" disabled>
												</div>
                                                </div>
                   
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom02">Current Password</label>
                                                        <input type="password" class="form-control" id="currentpassword" name="currentpassword" placeholder="Old Password" required>
                                                    <span id="checkcurrentpassword"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom01">New Password</label>
                                                        <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="validationCustom02">Confirm Password</label>
                                                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                     
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                    </div> <!-- container-fluid -->
                </div>
            </div>
            <!-- end main content-->

  @endsection