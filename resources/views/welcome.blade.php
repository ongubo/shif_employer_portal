@extends('layouts.auth')
@section('content')

<div class="col-sm-12 col-md-8 mx-auto">
    <div class="card mb-0 border-0 shadow-none mb-0 d-flex">
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
                <h4>
                    <small class="text-muted mt-3">Verify with an OTP code</small>
                </h4>
                <h5>
                    <small class="text-muted mt-3">Select ID Type</small>
                </h5>
            </div>
            <div class="col-12 mt-5 row ">

                <div class="col-sm-12 col-md-3 my-1">
                    <div class="card card-body border border-info rounded-4 p-5">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Kenyan Citizen
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 my-1">
                    <div class="card card-body border border-info rounded-4 p-5">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Foreign Resident
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 my-1">
                    <div class="card card-body border border-info rounded-4 p-5">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Refugee
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 my-1">
                    <div class="card card-body border border-info rounded-4 p-5">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Corporate
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 row my-5">
                <div class="col-6">

                    <a href="#" class="btn btn-info w-100">New Domestic</a>
                </div>
                <div class="col-6">

                    <a href="#" class="btn text-black btn-outline-light w-100">New Business</a>
                </div>
            </div>

        </div>
    </div>
    {{-- <div class="col-12 row my-5">
        <div class="col-6">

            <a href="#" class="btn text-black btn-info w-100">Previous</a>
        </div>
        <div class="col-6">

            <a href="#" class="btn text-black btn-outline-light w-100">Next</a>
        </div>
    </div> --}}
</div>

@endsection