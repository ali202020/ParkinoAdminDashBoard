@extends('layouts.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    {{-- <form class="form-valide" method="POST" action="{{route('User.store')}}" role="form">
                      {{csrf_field()}} --}}





                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <a href="{{route('Card.store_code')}}" class="btn btn-success btn-flat btn-addon btn-md m-b-10 m-l-5">GENERATE CODES</a>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>

            </div>
        </div>
    </div>
</div>



@endsection
