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
                                  <th>PhoneNumber</th>
                                  <th>Longitude</th>
                                  <th>Latitude</th>
                                  <th>ConsumptionTier</th>
                                  <th>State</th>
                                  <th>Slot</th>
                                  <th>Created At</th>
                                  <th>Disable</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($usersReservations as $usersReservation)
                              <tr>
                                  <td id="id">{{$usersReservation->id}}</td>
                                  <td id="name">{{$usersReservation->users->name}}</td>
                                  <td id="email">{{$usersReservation->users->email}}</td>
                                  <td id="phone_number">{{$usersReservation->users->phone_number}}</td>
                                  <td id="long">{{$usersReservation->long}}</td>
                                  <td id="lat">{{$usersReservation->lat}}</td>
                                  <td id="consumption_tier">{{$usersReservation->consumption_tier}}</td>
                                  <td id="state">{{$usersReservation->state}}</td>
                                  <td id="slot">{{$usersReservation->slot}}</td>
                                  <td id="created_at">{{$usersReservation->created_at}}</td>
                                  {{-- <td>
                                    <a name="edit" id="edit" href="{{route('Reservation_disable',['id' => $usersReservation->id ])}}" class="btn btn-success btn-rounded m-b-10 m-l-5">Edit</a>
                                  </td> --}}
                                  <td>
                                  {!! Form::open(['route' => ['Reservation.destroy', $usersReservation->id] , 'method'=>'DELETE']) !!}
                                    {{ Form::submit('Cancel Reservation',['class'=>'btn btn-danger dis btn-rounded m-b-8 m-l-4'])}}
                                  {!! Form::close() !!}

                                  </td>
                                </tr>
                              @endforeach


                          </tbody>
                      </table>

                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
