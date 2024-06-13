@extends('layouts.auth')

@section('content')

<div class="col-sm-12 col-md-8">
    <div class="card mb-0 border-0 shadow-none mb-0 d-flex">
        <div class="col-sm-12 col-md-8">
            @include('shared.notifications')
        </div>
        @if ($registration_type=='new')
        <div class="card-body row">
            <div class="col-1 offset-8">
                <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
            </div>
            <div class="col-12 mt-3">
                <h5>Register with the</h5>
                <h5>Social Health Authority</h5>
                <span class="text-muted mt-3">
                    You are registering a New Business
                </span>
            </div>
            <div class="card-body">
                <div class="col-12 my-3">
                    <div class="row">
                        <h6 class="card-title mb-2 text-muted">
                            Organization Details
                        </h6>
                        <hr class="border-info">
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Organization Name</label>
                            <span class='text-danger'>*</span>
                            <input class="form-control   border-info @error('name') is-invalid @enderror" name='name'
                                type="text" value='' placeholder="Enter Name">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Contact Name</label>
                            <input class="form-control   border-info @error('contact_name') is-invalid @enderror"
                                name='contact_name' type="text" value='{{old("contact_name")}}'
                                placeholder="Enter Full Name">
                        </div>

                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Contact Phone
                                Number</label> <span class='text-danger'>*</span>
                            <input class="form-control   border-info @error('contact_phone') is-invalid @enderror"
                                name='contact_phone' type="text" value='{{old("contact_phone")}}'
                                placeholder="07xxxxxxxx or +2547xxxxxxxx">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Physical Address</label>
                            <input class="form-control   border-info @error('physical_address') is-invalid @enderror"
                                name='physical_address' type="text" value='{{old("physical_address")}}'
                                placeholder="Enter Physical Address">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Postal Address</label>
                            <input class="form-control   border-info @error('postal_address') is-invalid @enderror"
                                name='postal_address' type="text" value='{{old("postal_address")}}'
                                placeholder="Enter Postal Address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row my-5">
                <div class="col-6">

                    <a href="#" class="btn btn-info w-100">Proceed</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('landing') }}" class="btn text-black btn-outline-light w-100">Previous Step</a>
                </div>
            </div>
        </div>
        @endif

        @if ($registration_type=='nhif')
        <div class="card-body row">
            <div class="col-1 offset-8">
                <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
            </div>
            <div class="col-12 mt-3">
                <h5>Register with the</h5>
                <h5>Social Health Authority</h5>
                <span class="text-muted mt-3">
                    You are registering using NHIF
                </span>
            </div>
            <div class="card-body">
                <div class="col-12 ">
                    <img src="{{asset('images/nhif.svg')}}" alt="" style="height: 70px;" srcset="">
                </div>
                <div class="col-12 my-3">
                    <div class="row col-12">
                        <div class="mb-3 col-sm-12 ">
                            <label class="text-black fw-semibold mb-1">NHIF Number</label>
                            <span class='text-danger'>*</span>
                            <input class="form-control   border-info @error('name') is-invalid @enderror" name='name'
                                type="text" value='' placeholder="Enter NHIF Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row my-5">
                <div class="col-6">

                    <a href="#" class="btn btn-info w-100">Proceed</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('landing') }}" class="btn text-black btn-outline-light w-100">Previous Step</a>
                </div>
            </div>
        </div>
        @endif

        @if ($registration_type=='nssf')
        <form method="POST" action="{{ route('register.validate.nssf') }}">
            @csrf
            <div class="card-body row">
                <div class="col-1 offset-8">
                    <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
                </div>
                <div class="col-12 mt-3">
                    <h5>Register with the</h5>
                    <h5>Social Health Authority</h5>
                    <span class="text-muted mt-3">
                        You are registering using NSSF
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
                                <input type="text" name='username' type="username"
                                    class="form-control  @error('username') is-invalid @enderror password-input"
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

                        <button type="submit" class="btn btn-info w-100">Proceed</button>
                    </div>
                    <div class="col-6">
                        <a href="{{ route('landing') }}" class="btn text-black btn-outline-light w-100">Previous
                            Step</a>
                    </div>
                </div>
            </div>
        </form>
        @endif

        @if ($registration_type=='valid_nssf')
        <form method="POST" action="{{ route('register.nssf') }}">
            @csrf
            <div class="card-body row">
                <div class="col-1 offset-8">
                    <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
                </div>
                <div class="col-12 mt-3">
                    <h5>Register with the</h5>
                    <h5>Social Health Authority</h5>
                    <span class="text-muted mt-3">
                        You are registering using NSSF. Your details have been validated
                    </span>
                </div>
                <div class="card-body">
                    <div class="col-12 ">
                        <img src="{{asset('images/nssf_logo.png')}}" alt="" style="height: 150px;" srcset="">
                    </div>
                    <div class="row">
                        <h6 class="card-title mb-2 text-muted">
                            Organization Details
                        </h6>
                        <hr>
                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Organization Name</label>
                            <span class='text-danger'>*</span>
                            <input class="form-control   border-info @error('name') is-invalid @enderror" name='name'
                                type="text" readonly value='{{ $nssf_employer["name"]??""}}' placeholder="Enter Name">
                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Contact Name</label>
                            <input class="form-control   border-info @error('contact_name') is-invalid @enderror"
                                name='contact_name' type="text" readonly value='{{ $nssf_employer["contact_name"]??""}}'
                                placeholder="Enter Full Name">
                        </div>

                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Contact Phone
                                Number</label> <span class='text-danger'>*</span>
                            <input class="form-control   border-info @error('contact_phone') is-invalid @enderror"
                                name='contact_phone' type="text" readonly
                                value='{{ $nssf_employer["contact_phone"]??""}}'
                                placeholder="07xxxxxxxx or +2547xxxxxxxx">
                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Physical Address</label>
                            <input class="form-control   border-info @error('physical_address') is-invalid @enderror"
                                name='physical_address' type="text" value='{{ $nssf_employer["physical_address"]??""}}'
                                placeholder="Enter Physical Address">
                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Postal Address</label>
                            <input class="form-control   border-info @error('postal_address') is-invalid @enderror"
                                name='postal_address' type="text" value='{{ $nssf_employer["postal_address"]??""}}'
                                placeholder="Enter Postal Address">
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="card-title mb-2 text-muted">
                            Admin Details
                        </h6>
                        <p>This Admin account will create other users in the system.</p>
                        <hr>
                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">First Name</label>
                            <input class="form-control  border-info @error('first_name') is-invalid @enderror"
                                name='first_name' type="text" required=""
                                value='{{ $nssf_employer["user"]["first_name"]??""}}' placeholder="Enter First Name">


                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Middle Name</label>
                            <input class="form-control  border-info @error('middle_name') is-invalid @enderror"
                                name='middle_name' type="text" required="" value='{{ $nssf_employer["user"]['
                                middle_name']??""}}'placeholder="Enter Middle Name">


                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Last Name</label>
                            <input class="form-control  border-info @error('last_name') is-invalid @enderror"
                                name='last_name' type="text" required=""
                                value='{{ $nssf_employer["user"]["last_name"]??""}}' placeholder="Enter Last Name">

                        </div>


                        <div class="form-group mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Phone</label>
                            <input class="form-control  border-info @error('phone') is-invalid @enderror w-100"
                                type="text" placeholder="07xxxxxxxx or +2547xxxxxxxx" name="phone"
                                value='{{ $nssf_employer["user"]["phone"]??""}}'>
                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-12">
                            <label class="text-black fw-semibold mb-1">Email</label>
                            <input class="form-control  border-info @error('email') is-invalid @enderror" name='email'
                                type="email" required="" value='{{ $nssf_employer["user"]["email"]??""}}'
                                placeholder="Enter Email">


                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-12">
                            <label class="text-black fw-semibold mb-1">Confirm Email</label>
                            <span class='text-danger'>*</span>
                            <input class="form-control   border-info @error('confirm_email') is-invalid @enderror"
                                name='confirm_email' type="email" value='{{ $nssf_employer["user"]["email"]??""}}'
                                placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="col-12 row my-5">
                        <div class="col-6">
                            <button type="submit" class="btn btn-info w-100">Proceed</button>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('landing') }}" class="btn text-black btn-outline-light w-100">Previous
                                Step</a>
                        </div>
                    </div>
                </div>
        </form>
        @endif

        @if ($registration_type=='sponsor')
        <div class="card-body row">
            <div class="col-1 offset-8">
                <img src="{{asset('images/sha.svg')}}" style="height: 70px;" alt="" srcset="">
            </div>
            <div class="col-12 mt-3">
                <h5>Register with the</h5>
                <h5>Social Health Authority</h5>
                <span class="text-muted mt-3">
                    You are registering as a sponsor
                </span>
            </div>
            <div class="card-body">
                <div class="col-12 ">
                    <img src="{{asset('images/nssf_logo.png')}}" alt="" style="height: 150px;" srcset="">
                </div>
                <div class="col-12 my-3">
                    <div class="row">
                        <h6 class="card-title mb-2 text-muted">
                            Organization Details
                        </h6>
                        <hr class="border-info">
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Organization Name</label>
                            <span class='text-danger'>*</span>
                            <input class="form-control   border-info @error('name') is-invalid @enderror" name='name'
                                type="text" value='' placeholder="Enter Name">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">ID Number</label>
                            <input class="form-control   border-info @error('id_number') is-invalid @enderror"
                                name='id_number' type="text" value='{{old("id_number")}}' placeholder="Enter Full Name">
                        </div>

                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">KRA PIN</label> <span
                                class='text-danger'>*</span>
                            <input class="form-control   border-info @error('kra_pin') is-invalid @enderror"
                                name='kra_pin' type="text" value='{{old("kra_pin")}}'
                                placeholder="07xxxxxxxx or +2547xxxxxxxx">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label class="text-black fw-semibold mb-1">Contact Number</label>
                            <input class="form-control   border-info @error('contact_number') is-invalid @enderror"
                                name='contact_number' type="text" value='{{old("contact_number")}}'
                                placeholder="Enter Physical Address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row my-5">
                <div class="col-6">

                    <a href="#" class="btn btn-info w-100">Proceed</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('landing') }}" class="btn text-black btn-outline-light w-100">Previous Step</a>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection