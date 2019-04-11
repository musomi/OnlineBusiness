
@extends('layouts.customapp')

@section('content')
<div class="page-content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb p-0 m-0">
                            <li class="breadcrumb-item"><a href="/login">Essaji</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cart-outline"></i></span>
                    <div class="mini-stat-info text-right">
                        <h3 class="counter mt-0 text-primary">$9851</h3>
                    </div>
                    <div class="clearfix"></div>
                    <p class=" mb-0 m-t-20 text-muted">Total Sales: $22506 <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>10.25%</span></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-usd"></i></span>
                    <div class="mini-stat-info text-right">
                        <h3 class="counter mt-0 text-success">3514</h3>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-muted mb-0 m-t-20">Total Orders: 892541 <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>8.38%</span></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cube-outline"></i></span>
                    <div class="mini-stat-info text-right">
                        <h3 class="counter mt-0 text-primary">5210</h3>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-muted mb-0 m-t-20">Total Users: 95,251 <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>3.05%</span></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-btc"></i></span>
                    <div class="mini-stat-info text-right">
                        <h3 class="counter mt-0 text-success">32,548</h3>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-muted mb-0 m-t-20">Average Visitors: 24,511 <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>22.58%</span></p>
                </div>
            </div>
        </div>
        <!-- end row -->

<div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">My Products</h4>
                            <p class="text-muted m-b-30 font-14">
                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>CATEGORY</th>
                                    <th>PRODUCT NAME</th>
                                    <th>PRODUCT PRICE</th>
                                    <th>PRODUCT QUANTITY</th>
                                </tr>
                                </thead>


                                <tbody>
                                  <?php
                                  use App\Categorie;
                                  ?>
                                @foreach($products as $product)
                                <?php
                                $category=Categorie::find($product['category_id']);
                                ?>

                                <tr>
                                   <td>{{$category->category_name}}</td>
                                   <td>{{$product->product_name}}</td>
                                   <td>{{$product->price}}</td>
                                   <td>{{$product->quantity}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


    </div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
