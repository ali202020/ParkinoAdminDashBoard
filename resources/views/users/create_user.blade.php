@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" method="POST" action="{{route('User.store')}}" role="form">
                      {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="name">Username <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a username..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your valid email..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one..">
                            </div>
                        </div>




                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="phone_number">Phone Number <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="212-999-0000">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="points">Points <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="number" class="form-control" id="points" name="points" placeholder="5.0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="consumed_points">Consumed Points <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="number" class="form-control" id="consumed_points" name="consumed_points" placeholder="5.0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection
