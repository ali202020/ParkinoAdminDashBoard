@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body" style="overflow-x:auto;">
                  <h4 class="card-title">Data Export</h4>
                  <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                  {{-- <div class="table-responsive m-t-40">
                    <div id="example23_wrapper" class="dataTables_wrapper">
                      <div class="dt-buttons">
                        <a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Copy</span></a>
                        <a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>CSV</span></a>
                        <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Excel</span></a>
                        <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>PDF</span></a>
                        <a class="dt-button buttons-print" tabindex="0" aria-controls="example23" href="#"><span>Print</span></a>
                      </div>
                      <div id="example23_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="" placeholder="" aria-controls="example23"></label>
                      </div> --}}
                      {{-- <form method='PUT' action="{{route('User.update',['id'=>$SystemUser->id])}}" role="form">
                        {{method_field('PUT') }}
                        {{csrf_field()}} --}}
                      {!! Form::open(['route' => ['Owner.update', $Owner->id] , 'method'=>'PATCH','files'=>true]) !!}
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>SSD</th>
                                    <th>Phone Number</th>
                                    <th>Owner Points</th>
                                    <th>Proprietary Name</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th>
                                    <th>Slots Number</th>
                                    <th>Available Slots For Usage</th>
                                    <th>Pricing</th>
                                    <th>Rating</th>
                                    <th>New Images</th>
                                    <th>Save</th>
                                    <th>Cancel</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td id="id">{{$Owner->id}}</td>
                                    <td><input type="text" class="form-control" id="name" name="name" value="{{$Owner->name}}"></td>
                                    <td><input type="email" class="form-control" id="email" name="email" value="{{$Owner->email}}"></td>
                                    <td><input type="text" class="form-control" id="ssd" name="ssd">{{$Owner->ssd}}</td>
                                    <td><input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$Owner->phone_number}}"></td>
                                    <td><input type="number" class="form-control" id="garage_points" name="garage_points" value="{{$Owner->garage_points}}"></td>

                                    <td>@foreach($PA as $Area) <input type="text" class="form-control" id="P" name="P" value="{{$Area->name}}"> @endforeach</td>
                                    <td>@foreach($PA as $Area) <input type="text" class="form-control" id="long" name="long" value="{{$Area->long}}"> @endforeach</td>
                                    <td>@foreach($PA as $Area) <input type="text" class="form-control" id="lat" name="lat" value="{{$Area->lat}}"> @endforeach</td>
                                    <td>@foreach($PA as $Area) <input type="number" class="form-control" id="slots_no" name="slots_no" value="{{$Area->slots_no}}"> @endforeach</td>
                                    <td>@foreach($PA as $Area) <input type="number" class="form-control" id="no_of_free_slots" name="no_of_free_slots" value="{{$Area->no_of_free_slots}}"> @endforeach</td>
                                    <td>@foreach($PA as $Area) <input type="number" class="form-control" id="price" name="price" value="{{$Area->price}}"> @endforeach</td>
                                    <td>@foreach($PA as $Area) <input type="number" class="form-control" id="stars" name="stars" value="{{$Area->stars}}"> @endforeach</td>

                                    <td><input type="file" name="file[]" multiple></td>
                                    <td>
                                      <input type="submit" value="Save" class="btn btn-primary btn-rounded m-b-10 m-l-5">
                                    </td>
                                    <td>
                                      <a name="cancel" id="cancel" href="{{route('Owner.show',['id'=>$Owner->id])}}" class="btn btn-dark btn-rounded m-b-10 m-l-5">Cancel</a>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                      {!! Form::close() !!}
                      {{-- </form> --}}
                      {{-- <div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries (filtered from 57 total entries)
                      </div>
                      <div class="dataTables_paginate special paging_simple_numbers"  id="example23_paginate"><a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="example23" data-dt-idx="1" tabindex="0" id="example23_next">Next</a></div> --}}
                      <br>
                      <a name="A" id="A" href="{{route('Owner.create')}}" class="btn btn-info btn-rounded m-b-10 m-l-5">Add More Users</a>
                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
