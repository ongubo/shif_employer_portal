@extends('layouts.auth')

@section('content')
<div class="col-sm-12 col-md-4">
    <div class="card mb-0 border-0 shadow-none mb-0 d-flex">
        <div class="card-body row">
            <div class="col-1 offset-11">
                <img src="{{asset('images/partners.png')}}" alt="" srcset="">
            </div>
            <div class="col-12 mt-3">
                <h5>Register with the</h5>
                <h5>Social Health Authority</h5>
                <span class="text-muted mt-3">
                    You are registering using NSSF e-Service
                </span>
            </div>
            <div class="card-body">
                <div class="col-12 ">
                    <img src="{{asset('images/nssf_logo.png')}}" alt="" style="height: 150px;" srcset="">
                </div>
                <div class="col-12 my-3">
                    <div class="mb-3">
                        <label for="username" class="form-label">Employer Number <span
                                class="text-danger">*</span></label>
                        <div class="position-relative ">
                            <input type="text" name='employerId' type="text"
                                class="form-control  @error('employerId') is-invalid @enderror password-input"
                                placeholder="Enter Nssf Employer Number" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">E-Service Username <span
                                class="text-danger">*</span></label>
                        <div class="position-relative ">
                            <input type="text" name='email' type="email"
                                class="form-control  @error('email') is-invalid @enderror password-input"
                                placeholder="Enter username" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password-input">E-Service Password <span
                                class="text-danger">*</span></label>
                        <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" name=" password"
                                class="form-control  @error('password') is-invalid @enderror pe-5 password-input "
                                placeholder="Enter password" id="password-input" required>
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row my-5">
                <div class="col-6">

                    <a href="#" class="btn btn-info w-100">Proceed</a>
                </div>
                <div class="col-6">

                    <a href="#" class="btn text-black btn-outline-light w-100">Previous Step</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection