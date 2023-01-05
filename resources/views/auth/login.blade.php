<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>@section('title',__('Login |'))</title>
  </head>
  <body>

<div class="container">
    <div class="row m-0">
        <div class="col-lg-6 col-12 ml-auto mr-auto card p-5 mt-5">
            <div class="login-logo text-center">
                <a href="{{ url('login') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" width="110">
                </a>
            </div>
            <div class="login-box-body py-3">
            <h4 class="login-box-msg text-center">Login</h4>
            </div>
            <form action="{{ url('login') }}" method="post">
                {{csrf_field()}}
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </form>

        </div>
    </div>
</div>


    
        
       
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>














