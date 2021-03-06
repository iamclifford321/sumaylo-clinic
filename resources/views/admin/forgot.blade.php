<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">



</head>
<body class="login-page">
    <div id="app">
      <div class="wrapper">
        <div class="container">


          <div class="login-box">
            <div class="login-logo">
              <a href="../../index2.html"><b>SDC</b>| Patient Registration</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
              <div class="card-body login-card-body">
                <p class="login-box-msg">Help us know it's you, Please enter your email, and we'll generate new password for you.</p>

                <form action="recover-password.html" method="post">
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>

                <p class="mt-3 mb-1">
                  <a href="{{ route('patients.login') }}">Sign in</a>
                </p>
                <p class="mb-0">
                  <a href="{{ route('patients.register') }}" class="text-center">Create new account</a>
                </p>
              </div>
              <!-- /.login-card-body -->
            </div>
          </div>
          <!-- /.login-box -->



        </div>
      </div>

    </div>


    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>
