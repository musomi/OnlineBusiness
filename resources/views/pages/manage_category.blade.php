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
                                              <li class="breadcrumb-item active">Categories</li>
                                          </ol>
                                      </div>
                                      <h4 class="page-title">Manage Categories</h4>

                                  </div>
                              </div>
                          </div>
                          <!-- end page title end breadcrumb -->


            <div class="row">

                <div class="col-lg-8">
                                  <div class="card m-b-20">
                                      <div class="card-body">

                                          <h4 class="mt-0 header-title">My Categories</h4>
                                          <div style="float:right" class=" text-center">
                                                      <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">New Category</button>
                                                  </div>
                                                  <div style="float:right;margin-right:10px" class=" text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#mySubModal">New Sub Category</button>
                                                    </div>

                                          <p class="text-muted m-b-30 font-14">

                                          </p>


                                          <table class="table table-striped">
                                              <thead>
                                              <tr>
                                                  <th>Name</th>
                                                  <th>Register Admin</th>
                                                  <th>Create Date</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                         <?php foreach($foods as $food): ?>
                                              <tr>
                                                  <td><a href="/menu/edit/{{$food->category_id}}"><?= $food['category_name']?></a></td>
                                                  <td><?= $food['register_user']?></td>
                                                  <td><?= $food['created_at']?></td>
                                                  <td><a href="/menu/trash/{{$food->category_id}}"><button type="button" class="btn btn-warning waves-effect waves-light">Trash</button></a></td>
                                              </tr>
                                      <?php endforeach ?>
                                              </tbody>
                                          </table>

                                      </div>
                                  </div>
                              </div> <!-- end col -->
                              </div> <!-- end row -->

                              <div class="row">

                                  <div class="col-lg-8">
                                                    <div class="card m-b-20">
                                                        <div class="card-body">

                                                            <h4 class="mt-0 header-title">Trashed Categories</h4>
                                                            <p class="text-muted m-b-30 font-14">

                                                            </p>


                                                            <table class="table table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Register Admin</th>
                                                                    <th>Create Date</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                           <?php foreach($Tfoods as $food): ?>
                                                                <tr>
                                                                    <td><a href="/menu"><?= $food['category_name']?></a></td>
                                                                    <td><?= $food['register_user']?></td>
                                                                    <td><?= $food['created_at']?></td>
                                                                    <td>
                                                                      <div class="btn-group" role="group">
                                                                          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                              Dropdown
                                                                          </button>
                                                                          <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                              <a class="dropdown-item" href="/menu/trash/{{$food->category_id}}">Restore</a>
                                                                              <a class="dropdown-item" href="/menu/destroy/{{$food->category_id}}">Remove</a>
                                                                          </div>
                                                                      </div>
                                                                    </td>
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
                                                                  <h5 class="modal-title mt-0" id="myModalLabel">New Category</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                              </div>
                                                              <div class="modal-body">

                                <form action="/menu/store" method="POST" enctype="multipart/form-data">
                                  {{csrf_field()}}

                                              <div class="form-group">
                                                  <label>Name</label>
                                                  <div>
                                                      <input type="text" name="menu_name" class="form-control" required
                                                             placeholder="Enter the name"/>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label>Price Range</label>
                                                  <div>
                                                      <input type="text" name="range" class="form-control" required
                                                             placeholder="Enter the name"/>
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


                                                  <div id="mySubModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <h5 class="modal-title mt-0" id="myModalLabel">New Sub Category</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                              </div>
                                                              <div class="modal-body">

                                <form action="/submenu/store" method="POST">
                                  {{csrf_field()}}

                                  <div class="form-group">
                                          <label class="control-label">Category</label>
                                          <select name="category_id" class="form-control select2">
                                          <option value="">Select</option>
                                              <optgroup label="Select a Category">
                                              <?php foreach($foods as $food): ?>
                                                  <option value="<?=$food['category_id']?>"><?=$food['category_name']?></option>
                                                 <?php endforeach ?>
                                              </optgroup>
                                          </select>
                                  </div>

                                              <div class="form-group">
                                                  <label>Name</label>
                                                  <div>
                                                      <input type="text" name="menu_name" class="form-control" required
                                                             placeholder="Enter the name"/>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label>Price Range</label>
                                                  <div>
                                                      <input type="text" name="range" class="form-control" required
                                                             placeholder="Enter the name"/>
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
