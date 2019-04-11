<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Essaji</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="staff/images/favicon.ico">

        <!-- Basic Css files -->
        <link href="staff/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="staff/css/icons.css" rel="stylesheet" type="text/css">
        <link href="staff/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="sk-three-bounce">
                    <div class="sk-child sk-bounce1"></div>
                    <div class="sk-child sk-bounce2"></div>
                    <div class="sk-child sk-bounce3"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="staff/images/logo.jpg" height="60" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue.</p>

                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" class="form-group">
                                <label for="username">Email</label>
                                <input type="text" class="form-control" name="email" id="username" placeholder="Enter email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    <div class="custom-control mt-2 custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-success w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="">Don't have an account ? <a href="/login" class="font-500 font-14 text-dark font-secondary"> Signup Now </a> </p>
                <p class="">© 2018 Canvab. Crafted with <i class="mdi mdi-heart text-danger"></i> by robert</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="staff/js/jquery.min.js"></script>
        <script src="staff/js/popper.min.js"></script>
        <script src="staff/js/bootstrap.min.js"></script>
        <script src="staff/js/modernizr.min.js"></script>
        <script src="staff/js/jquery.slimscroll.js"></script>
        <script src="staff/js/waves.js"></script>
        <script src="staff/js/jquery.nicescroll.js"></script>
        <script src="staff/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="staff/js/app.js"></script>

    </body>
</html>
