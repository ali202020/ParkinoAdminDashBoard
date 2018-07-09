@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Data Export</h4>
                  <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                  <div class="table-responsive m-t-40">
                    {{-- <div id="example23_wrapper" class="dataTables_wrapper">
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
                                  <th>Phone Number</th>
                                  <th>Points</th>
                                  <th>Consumed Points</th>
                                  {{-- <th>RFID Card Number</th>
                                  <th>QR Card Number</th> --}}
                                  <th>Created At</th>
                                  <th>Updated At</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($SystemUsers as $SystemUser)
                              <tr>
                                  <td id="id">{{$SystemUser->id}}</td>
                                  <td id="name">{{$SystemUser->name}}</td>
                                  <td id="email">{{$SystemUser->email}}</td>
                                  <td id="phone_number">{{$SystemUser->phone_number}}</td>
                                  <td id="points">{{$SystemUser->points}}</td>
                                  <td id="consumed_points">{{$SystemUser->consumed_points}}</td>
                                  {{-- <td id="rfid_no">{{$SystemUser->user_card->rfid_no}}</td>
                                  <td id="qr_no">{{$SystemUser->user_card->qr_no}}</td> --}}
                                  <td id="created_at">{{$SystemUser->created_at}}</td>
                                  <td id="updated_at">{{$SystemUser->updated_at}}</td>
                                  <td>
                                    <a name="edit" id="edit" href="{{route('User.edit',['id'=>$SystemUser->id])}}" class="btn btn-success btn-rounded m-b-10 m-l-5">Edit</a>
                                  </td>
                                  <td>
                                  {!! Form::open(['route' => ['User.destroy', $SystemUser->id] , 'method'=>'DELETE']) !!}
                                    {{ Form::submit('Delete',['class'=>'btn btn-danger btn-rounded m-b-10 m-l-5'])}}
                                  {!! Form::close() !!}
                                  </td>

                              </tr>
                              @endforeach

                          </tbody>
                      </table>
                      <br>
                      <a name="A" id="A" href="{{route('User.create')}}" class="btn btn-info btn-rounded m-b-10 m-l-5">Add More Users</a>
                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
