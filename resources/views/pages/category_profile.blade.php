@extends('layouts.customapp')

@section('content')

<div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="float-right">
                                            <ol class="breadcrumb p-0 m-0">
                                                <li class="breadcrumb-item"><a href="index.html#"><?=$category['category_name'];?></a></li>

                                            </ol>
                                        </div>
                                        <h4 class="page-title">Manage Categories</h4>

                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Edit <?=$category['category_name']?></h4>


								<form action="/Category/update/{{$category->category_id}}" method="POST">
                  {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="name" value="<?=$category['category_name'];?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Price Range</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="range" value="<?=$category['price_range'];?>"/>
                                                    </div>
                                                </div>

                              <div class="form-group m-b-0">
                                                    <div>
                                                        <button type="submit" name="edit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

@endsection
