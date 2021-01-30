<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      
      <meta charset="utf-8" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>MyShop - Admin Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Best Cryptocurrency Investment Platform" name="description" />
      <meta content="" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="{{asset("assets/images/favs.png")}}">

      <!-- Bootstrap Css -->
      <link href="{{asset("assets/css/bootstrap.min.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="{{asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="{{asset("assets/css/app.min.css")}}" id="app-style" rel="stylesheet" type="text/css" />

  </head>
<div class="home-btn d-none d-sm-block">
    <a href="index-2.html" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back Admin!</h5>
                                    <p>Sign in to MyShop.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                            <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div>
                            <a href="index-2.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                    <img src="{{asset("assets/images/favs.png")}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        @if(Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
{{Session::get('error_message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
                        </div>
                        @endif
                        <div class="p-2">
                        <form method="POST" action="{{ url('/admin') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input id="email" type="email" class="input @error('email') is-invalid @enderror form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus size="20">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
        
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input id="password" type="password" class="input @error('password') is-invalid @enderror form-control" name="password" required autocomplete="current-password" size="20">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                                </div>
        
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                                </div>
                                
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
    
                            </form>
                        </div>
    
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>