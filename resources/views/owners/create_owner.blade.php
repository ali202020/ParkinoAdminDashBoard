@extends('layouts.app')
@section('content')

<div class=" justify-content-center">
  <div class="col-lg-12">
      <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Owners info</h4>
          </div>
          <div class="card-body">
              <form method="POST" action="{{route('Owner.store')}}" role="form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-body">
                      <h3 class="box-title m-t-15">Personal Info</h3>
                      <hr class="m-t-0 m-b-40">


                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="name">Owner Name</label>
                                  <div class="col-md-9">
                                      <input type="text" name="name" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="email">Email</label>
                                  <div class="col-md-9">
                                      <input type="email" name="email" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="ssd">SSD</label>
                                  <div class="col-md-9">
                                      <input type="text" name="ssd" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="phone_number">Phone Number</label>
                                  <div class="col-md-9">
                                      <input type="text" name="phone_number" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="garage_points">Owner Points</label>
                                  <div class="col-md-9">
                                      <input type="number" name="garage_points" class="form-control">
                                  </div>
                              </div>
                          </div>


                      </div>
                      <!--/row-->
                      </div>






                      <h3 class="box-title">Parking Area Specs</h3>
                      <hr class="m-t-0 m-b-40">
                      <!--/row-->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="p_name">Proprietary Name</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" name="p_name">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="long">Longitude</label>
                                  <div class="col-md-9">
                                      <input type="text" name="long" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="lat">Latitude</label>
                                  <div class="col-md-9">
                                      <input type="text" name="lat" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="slots_no">Slots Number</label>
                                  <div class="col-md-9">
                                      <input type="number" name="slots_no" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="no_of_free_slots">Available Slots For Usage</label>
                                  <div class="col-md-9">
                                      <input type="number" name="no_of_free_slots" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="price">Pricing</label>
                                  <div class="col-md-9">
                                      <input type="number" name="price" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="stars">Rating</label>
                                  <div class="col-md-9">
                                      <input type="number" name="stars" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3" for="file">Upload Parking Area Image :</label>
                                  <div class="col-md-9">
                                      <input type="file" name="file[]" class="form-control" multiple>
                                  </div>
                              </div>
                          </div>
                      </div>



                  <hr>
                  <div class="form-actions">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="row">
                                  <div class="col-md-offset-3 col-md-9">
                                      <button type="submit" class="btn btn-success">Submit</button>
                                      <a href="{{route('Owner.index')}}" class="btn btn-inverse">Cancel</a>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6"> </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>



@endsection
