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
                                  <th>Creted At</th>
                                  <th>Updated At</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                                  <td id="id" name="id">{{$Owner->id}}</td>
                                  <td id="name" name="name">{{$Owner->name}}</td>
                                  <td id="email" name="email">{{$Owner->email}}</td>
                                  <td id="ssd" name="ssd">{{$Owner->ssd}}</td>
                                  <td id="phone_number" name="phone_number">{{$Owner->phone_number}}</td>
                                  <td id="garage_points" name="garage_points">{{$Owner->garage_points}}</td>

                                  {{-- @foreach ($PA as $Area) --}}
                                  <td id="p_name" name="p_name">@foreach($PA as $Area) {{$Area->name}}</br> @endforeach</td>
                                  <td id="long" name="long">@foreach($PA as $Area) {{$Area->long}}</br> @endforeach</td>
                                  <td id="lat" name="lat">@foreach($PA as $Area) {{$Area->lat}}</br> @endforeach</td>
                                  <td id="slots_no" name="slots_no">@foreach($PA as $Area) {{$Area->slots_no}}</br> @endforeach</td>
                                  <td id="no_of_free_slots" name="no_of_free_slots">@foreach($PA as $Area) {{$Area->no_of_free_slots}}</br> @endforeach</td>
                                  <td id="price" name="price">@foreach($PA as $Area) {{$Area->price}}</br> @endforeach</td>
                                  <td id="stars" name="stars">@foreach($PA as $Area) {{$Area->stars}}</br> @endforeach</td>
                                  <td id="created_at">@foreach($PA as $Area) {{$Area->created_at}}</br> @endforeach</td>
                                  <td id="updated_at">@foreach($PA as $Area) {{$Area->updated_at}}</br> @endforeach</td>
                                  {{-- @endforeach --}}

                                  <td>
                                    <a name="edit" id="edit" href="{{route('Owner.edit',['id'=>$Owner->id])}}" class="btn btn-success btn-rounded m-b-10 m-l-5">Edit</a>
                                  </td>
                                  <td>
                                  {{-- <form method="DELETE" action="{{route('User.destroy',['id'=>$SystemUser->id])}}" role="form">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-rounded m-b-10 m-l-5">Delete</button>
                                  </form> --}}
                                  {!! Form::open(['route' => ['Owner.destroy', $Owner->id] , 'method'=>'DELETE']) !!}
                                    {{ Form::submit('Delete',['class'=>'btn btn-danger btn-rounded m-b-10 m-l-5'])}}
                                  {!! Form::close() !!}
                                  </td>

                              </tr>

                          </tbody>
                      </table>
                      {{-- <div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries (filtered from 57 total entries)
                      </div>
                      <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate"><a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="example23" data-dt-idx="1" tabindex="0" id="example23_next">Next</a></div> --}}
                      <br>
                      <a name="A" id="A" href="{{route('Owner.create')}}" class="btn btn-info btn-rounded m-b-10 m-l-5">Add More Owners</a>
                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
