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
        <link rel="shortcut icon" href="{{asset('staff/images/favicon.ico')}}">

		<!-- DataTables -->
        <link href="{{asset('staff/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('staff/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('staff/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Basic Css files -->
        <link href="{{asset('staff/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
         <link href="{{asset('staff/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('staff/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('staff/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('staff/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('staff/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('staff/css/style.css')}}" rel="stylesheet" type="text/css">


		<script type="text/javascript" src="{{asset('staff/js/jquery-1.11.3.js')}}"></script>
        <script src="{{asset('staff/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('staff/js/bootstrap.js')}}"></script>


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
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo text-center">Essaji</a>
                        <!--<a href="index.html" class="logo"><img src="assets/images/logo.png" height="14" alt="logo"></a>-->
                    </div>
                </div>

                <nav class="navbar-custom">
                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search" />
                            <a href="pages-blank.html#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="list-inline float-right mb-0">
                        <!-- Fullscreen -->
                        <li class="list-inline-item dropdown notification-list hide-sm">
                            <a class="nav-link waves-effect" href="pages-blank.html#" id="btn-fullscreen">
                                <i class="mdi mdi-fullscreen noti-icon"></i>
                            </a>
                        </li>
                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="pages-blank.html#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('staff/images/logo.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>

                    <!-- Menu Collapse Button -->
                    <button type="button" class="button-menu-mobile open-left waves-effect">
                        <i class="ion-navicon"></i>
                    </button>

                    <div class="clearfix"></div>
                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
              <?php
              use App\Categorie;
              use App\Sub_categorie;
              $categorie=Categorie::where('trashed','false')->get();
              $Subcategorie=Sub_categorie::all();

              ?>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>

                            <li class="menu-title">Main</li>

                            <li>
                                <a href="/home" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard <span class="badge badge-pill badge-success pull-right">02</span> </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Categories<span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">

                        @if(count($categorie) > 0)
                        @foreach($categorie as $category)

                        <li><a href="/menu/{{$category->category_id}}"><?=$category['category_name']?></a></li>

                          @endforeach
                          @else
                          <p>No categories</p>
                          @endif
                          </ul>

                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span>Sub Categories<span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">

                        @if(count($Subcategorie) > 0)
                        @foreach($Subcategorie as $category)

                        <li><a href="/submenu/{{$category->sub_category_id}}"><?=$category['category_name']?></a></li>

                          @endforeach
                          @else
                          <p>No subcategories</p>
                          @endif
                          </ul>

                            </li>


							                <li>
                                <a href="/menu" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Manage Categories <span class="badge badge-pill badge-success pull-right">02</span> </span></a>
                              </li>

                        </ul>
                    </div>



                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->





<!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                         @yield('content')

                  </div> <!-- content -->




 <footer class="footer">
                    © 2018 Essaji <span class="text-muted hide-sm pull-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by robert</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('staff/js/jquery.min.js')}}"></script>
        <script src="{{asset('staff/js/popper.min.js')}}"></script>
        <script src="{{asset('staff/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('staff/js/modernizr.min.js')}}"></script>
        <script src="{{asset('staff/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('staff/js/waves.js')}}"></script>
        <script src="{{asset('staff/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('staff/js/jquery.scrollTo.min.js')}}"></script>

		<!-- Required datatable js -->
        <script src="{{asset('staff/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('staff/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('staff/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('staff/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Plugins js -->
        <script src="{{asset('staff/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('staff/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('staff/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('staff/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('staff/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('staff/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>

        <!-- Datatable init js -->
        <script src="{{asset('staff/pages/datatables.init.js')}}"></script>

		<!-- Parsley js -->
        <script type="text/javascript" src="{{asset('staff/plugins/parsleyjs/parsley.min.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

         <!-- Plugins Init js -->
        <script src="{{asset('staff/pages/form-advanced.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('staff/js/app.js')}}"></script>

    </body>
</html>
