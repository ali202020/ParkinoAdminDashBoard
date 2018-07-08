@extends('layouts.app')
@section('content')

<div class=" justify-content-center">
  <div class="col-lg-12">
      <div class="card card-outline-info">
          <div class="card-header">
              <h4 class="m-b-0 text-white">Owners info</h4>
          </div>
          <div class="card-body">
              <form action="#" class="form-horizontal">
                  <div class="form-body">
                      <h3 class="box-title m-t-15">Person Info</h3>
                      <hr class="m-t-0 m-b-40">


                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Address 1</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Address 2</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control">
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
                                  <label class="control-label text-right col-md-3">Address 1</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="control-label text-right col-md-3">Address 2</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control">
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
                                      <button type="button" class="btn btn-inverse">Cancel</button>
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
