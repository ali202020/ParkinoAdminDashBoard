@extends('layouts.app')
@section('content')
  <div class="row">
      <div class="col-md-3">
          <div class="card p-30">
              <div class="media">
                  <div class="media-left meida media-middle">
                      <span><i class="fa fa-user color-success f-s-40 color-primary"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                      <h2>{{$user_count}}</h2>
                      <p class="m-b-0">Total Users</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card p-30">
              <div class="media">
                  <div class="media-left meida media-middle">
                      <span><i class="fa fa-credit-card f-s-40 color-primary"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                      <h2>{{$total_cards}}</h2>
                      <p class="m-b-0">Total number of cards</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card p-30">
              <div class="media">
                  <div class="media-left meida media-middle">
                      <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                      <h2>{{$pa_count}}</h2>
                      <p class="m-b-0">Parking Areas</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card p-30">
              <div class="media">
                  <div class="media-left meida media-middle">
                      <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                      <h2>{{$total_owners}}</h2>
                      <p class="m-b-0">Total Owners</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row bg-white m-l-0 m-r-0 box-shadow ">

      <!-- column -->
      <div class="col-lg-12">
          <div class="card">
              <div class="card-title">
                  <h4>Statistics</h4>
              </div>
              <div class="card-body">
                  {{-- <div id="chartdiv"></div> --}}
                  {!! $chartjs->render() !!}

              </div>
          </div>
      </div>
      <!-- column -->


      <!-- column -->
  </div>
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-title">
                  <h4>Recently Registered Users</h4>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Phone Number</th>
                                  <th>Points</th>
                                  <th>Consumed Points</th>
                                  <th>Created At</th>

                                  <th>Status</th>
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
                                  <td id="created_at">{{$SystemUser->created_at}}</td>
                                  <td><span class="badge badge-success">Done</span></td
                              </tr>
                              @endforeach

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <div class="row">
<div class="col-lg-8">
<div class="row">
<div class="col-lg-6">
<div class="card">
  <div class="card-title">
    <h4>Recent Feedbacks </h4>
  </div>
  <div class="recent-comment">
    <div class="media">
      <div class="media-left">
        <a href="#"></a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">john doe</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. </p>
        <p class="comment-date">October 21, 2018</p>
      </div>
    </div>
    <div class="media">
      <div class="media-left">
        <a href="#"></a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">john doe</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. </p>
        <p class="comment-date">October 21, 2018</p>
      </div>
    </div>

    <div class="media">
      <div class="media-left">
        <a href="#"></a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">john doe</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. </p>
        <p class="comment-date">October 21, 2018</p>
      </div>
    </div>

    <div class="media no-border">
      <div class="media-left">
        <a href="#"></a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Mr. Michael</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. </p>
        <div class="comment-date">October 21, 2018</div>
      </div>
    </div>
  </div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
<div class="col-lg-6">
<div class="card">
  <div class="card-body">
    <div class="year-calendar"></div>
  </div>
</div>
</div>


</div>
</div>

<div class="col-lg-4">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Weather</h4>
                  <div class="card-content">

                    <div class="col-12">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <div class="weather-widget">
                                    <div id="weather-one" class="weather-one"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
              </div>
          </div>
      </div>

  </div>


































@endsection
