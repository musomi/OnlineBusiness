@extends('layouts.customapp')

@section('content')

<div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="float-right">
                                            <ol class="breadcrumb p-0 m-0">
                                              <li class="breadcrumb-item"><a href="/home">Essaji</a></li>
                                                <li class="breadcrumb-item"><a href="/home"><?=$category->category_name;?></a></li>
                                                <li class="breadcrumb-item active"><?=$food->category_name;?></li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Available <?=$food->category_name;?></h4><br />

                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->



							<div class="row">
                                    <div class="col-12">
                                        <div class="card m-b-20">
                                            <div class="card-body">

                                                <h4 class="mt-0 header-title"></h4>

												<div style="float:right" class=" text-center">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">New <?= $food->category_name;?></button>
                                                    </div>

                                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>

                                                        <th>PRODUCT NAME</th>
                                                        <th>PRODUCT PRICE</th>
                                                        <th>PRODUCT QUANTITY</th>
                                                        <th>PRODUCT DETAILS</th>


                                                    </tr>
                                                    </thead>


                                                    <tbody>
													<?php foreach($category_foods as $product): ?>
                                                    <tr>

                                                       <td><a href="/subCategoryProducts/edit/{{$product->product_id}}"><?= $product['product_name']; ?></a></td>
                                                       <td>Ksh <?= $product['price']; ?></td>
                                                       <td><?= $product['quantity']; ?> pcs</td>
                                                       <td><?= $product['description']; ?></td>


                                                    </tr>
                                                    <?php endforeach ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->


                                           <!-- sample modal content -->
                                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">

								                  <form action="/CategoryProduct/storesub" method="POST" enctype="multipart/form-data">

                                    {{csrf_field()}}
                                    <input type="hidden" name="category_id" class="form-control" value="{{$category->category_id}}"/>
                                    <input type="hidden" name="sub_category_id" class="form-control" value="{{$food->sub_category_id}}"/>

                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <div>
                                                        <input type="text" name="name" class="form-control" required
                                                               placeholder="Enter the name"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <div>
                                                        <input type="text" name="description" class="form-control" required
                                                               placeholder="Enter brief description"/>
                                                    </div>
                                                </div>

												                        <div class="form-group">
                                                    <label>Price</label>
                                                    <div>
                                                        <input type="text" name="price" class="form-control" required
                                                               placeholder="eg 10"/>
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label>Quantity</label>
                                                    <div>
                                                        <input type="text" name="quantity" class="form-control" required
                                                               placeholder="eg 20"/>
                                                    </div>
                                                </div>
                                  <div class="form-group">
                                      <label>Image</label>
                                      <div>
                                          <input type="file" name="select_file" class="form-control" required />
                                      </div>
                                  </div>

												 <div class="modal-footer">
                                                                     <div class="form-group m-b-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
														<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                                </div>

                                            </form>

                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

@endsection
