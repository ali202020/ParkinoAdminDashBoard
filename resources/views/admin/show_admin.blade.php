@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
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
                                  <th>Creted At</th>
                                  <th>Updated At</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>

                          <tbody>
                              <tr>
                                  <td id="id">{{$Admin->id}}</td>
                                  <td id="name">{{$Admin->name}}</td>
                                  <td id="email">{{$Admin->email}}</td>

                                  <td id="created_at">{{$Admin->created_at}}</td>
                                  <td id="updated_at">{{$Admin->updated_at}}</td>
                                  <td>
                                    <a name="edit" id="edit" href="{{route('Admin.edit',['id'=>$Admin->id])}}" class="btn btn-success btn-rounded m-b-10 m-l-5">Edit</a>
                                  </td>
                                  <td>
                                  {{-- <form method="DELETE" action="{{route('User.destroy',['id'=>$Admin->id])}}" role="form">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger btn-rounded m-b-10 m-l-5">Delete</button>
                                  </form> --}}
                                  {!! Form::open(['route' => ['Admin.destroy', $Admin->id] , 'method'=>'DELETE']) !!}
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
                      <a name="A" id="A" href="{{route('Admin.create')}}" class="btn btn-info btn-rounded m-b-10 m-l-5">Add More Users</a>
                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
