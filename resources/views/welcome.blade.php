@extends('layouts.auth')
@section('content')

<div class="col-sm-12 col-md-8 mx-auto">
    <div class="card mb-0 border-0 shadow-none mb-0 d-flex">
        <form method="POST" action="{{ route('register.direction') }}">
            @csrf
            <div class="card-body row">
                <div class="col-4 offset-8">
                    <img src="{{asset('images/partners.png')}}" alt="" srcset="">
                </div>
                <div class="col-12 mt-3">
                    <h5>Register with the</h5>
                    <h5>Social Health Authority</h5>
                    <span class="text-muted mt-3">
                        Enter your details below to be authenticated
                    </span>
                </div>
                <div class="col-12 my-3">
                    <h5>
                        <small class="text-muted mt-3">Select Registration Type</small>
                    </h5>
                </div>
                <div class="col-12 mt-5 row ">
                    <div class="col-sm-12 col-md-3 my-1">
                        <div class="card card-body border border-info rounded-4 p-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="direction" value="register_nhif">
                                <label class="form-check-label" for="register_nhif">
                                    Register With NHIF
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3 my-1">
                        <div class="card card-body border border-info rounded-4 p-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="direction" value="register_nssf">
                                <label class="form-check-label" for="register_nssf">
                                    Register With NSSF
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 my-1">
                        <div class="card card-body border border-info rounded-4 p-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="direction" value="new_business">
                                <label class="form-check-label" for="new_business">
                                    New Business
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 my-1">
                        <div class="card card-body border border-info rounded-4 p-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="direction" value="register_sponsor"
                                    checked>
                                <label class="form-check-label" for="register_sponsor">
                                    Register As A sponsor
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 row my-5">
                    <div class="col-6">
                        <button type="submit" class="btn btn-info w-100">Proceed</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>

@endsection