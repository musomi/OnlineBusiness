
@extends('pages.shop')

@section('content')
<?php
use App\Sub_categorie;
?>
<link href="{{asset('staff/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('links/style.css')}}" rel="stylesheet" type="text/css">

<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Categories</h6>

        <!--  Catagories  -->
        <div style="margin-top:-15%" class="catagories-menu">
          <div id="sidebar-menu">
              <ul>


                @if(count($categories) > 0)
                @foreach($categories as $category)
                <?php
                //use App\Sub_categorie;
                $subca=Sub_categorie::where('category_id',$category['category_id'])->get();
                 ?>
                     @if(count($subca) > 0)
                     <li class="has_sub">
                         <a href="javascript:void(0);" class="waves-effect"><span> {{$category['category_name']}}<span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                         <ul class="list-unstyled">
                           @foreach($subca as $subcategory)
                           <li><a href="/Subshop/{{$subcategory['sub_category_id']}}"><?=$subcategory['category_name']?></a></li>
                           @endforeach
                     </ul>

                     </li>
                     @else
                     <li>
                      <a href="/shop/{{$category['category_id']}}" class="waves-effect"><i class="mdi mdi-buffer"></i><span>{{$category['category_name']}} </span></a>
                      </li>
                      @endif

                    @endforeach
                  @else
                  <p>No categories</p>
                  @endif


              </ul>
          </div>
        </div>
    </div>

</div>

@yield('content1')


<!-- jQuery  -->
<script src="{{asset('staff/js/jquery.min.js')}}"></script>
<script src="{{asset('staff/js/popper.min.js')}}"></script>
<script src="{{asset('staff/js/bootstrap.min.js')}}"></script>
<script src="{{asset('staff/js/modernizr.min.js')}}"></script>
<script src="{{asset('staff/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('staff/js/waves.js')}}"></script>
<script src="{{asset('staff/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('staff/js/jquery.scrollTo.min.js')}}"></script>

<!-- Parsley js -->
    <scrip@yield('content1)t type="text/javascript" src="{{asset('staff/plugins/parsleyjs/parsley.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

     <!-- Plugins Init js -->
    <script src="{{asset('staff/pages/form-advanced.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('staff/js/app.js')}}"></script>

@endsection
