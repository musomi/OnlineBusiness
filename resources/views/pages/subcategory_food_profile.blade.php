@extends('layouts.customapp')

@section('content')

<div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="float-right">
                                            <ol class="breadcrumb p-0 m-0">
                                                <li class="breadcrumb-item"><a href="index.html#"><?=$food['category_name'];?></a></li>
                                                <li class="breadcrumb-item active"><?=$service['product_name']?></li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Edit <?=$service['product_name']?></h4>

                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title"></h4>


								<form action="/subCategoryProducts/update/{{$service->product_id}}" method="POST">
                  {{csrf_field()}}
                                                <div class="form-group">
                                                        <label class="control-label">Sub Category</label>
                                                        <select name="sub_category_id" class="form-control select2">
														                            <option value="<?=$service['sub_category_id']?>">Select</option>
                                                            <optgroup label="Select to Change Product Sub Category">
															                              <?php foreach($foods as $food): ?>
                                                              <option value="<?=$food['sub_category_id']?>"><?=$food['category_name']?></option>
                                                               <?php endforeach ?>
                                                            </optgroup>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="name" value="<?=$service['product_name'];?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="description" value="<?=$service['description'];?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div>
                                                        <input class="form-control" required type="text" name="price" value="<?=$service['price']?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Quantity Available</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="quantity" value="<?=$service['quantity']?>"/>
                                                    </div>
                                                </div>


                                                <div class="form-group m-b-0">
                                                    <div>
                                                        <button type="submit" name="edit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <a href="/CategoryProducts/{{$service['product_id']}}/destroy" class="btn btn-primary">delete</a>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
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
