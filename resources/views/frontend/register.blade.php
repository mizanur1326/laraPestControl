<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('backend/assets/vendors/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        /* padding-top: 40px; */
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <h1> Customer Register </h1>
        <div class="card ">
            <div class="card-header text-center"><a href="/"><img class="logo-img" src="{{asset('backend/assets/images/logo.png')}}" alt="logo"></a></div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>                       
            @endif
                <form method="POST" action="{{route('customer.store')}}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="name" id="name" type="text" placeholder="Name" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="phone" id="phone" type="text" placeholder="Phone" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="address" id="address" type="text" placeholder="address" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="email" id="email" type="text" placeholder="email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register Now</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="{{url('customer/login')}}" class="footer-link">Login Now</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{asset('backend/assets/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
 
</html>