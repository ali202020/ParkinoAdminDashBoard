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
                                  <th>RFID_NUM</th>
                                  <th>QR_NUM</th>
                                  <th>IN USE</th>
                                  <th>Creted At</th>
                                  <th>Updated At</th>
                                  <th>DROP CARD</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($Cards as $Card)
                              <tr>
                                  <td id="id">{{$Card->id}}</td>
                                  <td id="rfid_no">{{$Card->rfid_no}}</td>
                                  <td id="qr_no">{{$Card->qr_no}}</td>
                                  <td id="state">{{$Card->state}}</td>
                                  <td id="created_at">{{$Card->created_at}}</td>
                                  <td id="updated_at">{{$Card->updated_at}}</td>

                                  <td>
                                  {!! Form::open(['route' => ['Card.destroy', $Card->id] , 'method'=>'DELETE']) !!}
                                    {{ Form::submit('Delete',['class'=>'btn btn-danger btn-rounded m-b-10 m-l-5'])}}
                                  {!! Form::close() !!}
                                  </td>

                              </tr>
                              @endforeach

                          </tbody>
                      </table>
                      <br>
                      <a name="A" id="A" href="{{route('Card.create')}}" class="btn btn-info btn-rounded m-b-10 m-l-5">Generate More Codes</a>
                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
