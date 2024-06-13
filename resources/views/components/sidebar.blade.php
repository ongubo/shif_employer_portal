<div
    class="app-menu navbar-menu bg-white hover:bg-primary-50 hover:text-white-500 border-end d-flex h-80 flex-column gap-1 p-1 rounded-2 mt-4">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('/')}}" class="logo logo-dark">
            {{-- <span class="logo-sm"><img src="{{ asset('assets/images/logo.svg') }}" alt="" height="40"
                    width="250"></span>
            <span class="logo-lg"><img src="{{ asset('assets/images/logo.svg') }}" alt="" height="40"
                    width="250"></span> --}}
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">

        <div class="container-fluid">

            <div id="two-column-menu"></div>

            <div class="card overflow-hidden pb-0 pt-0 rounded-top-4">

                <div class="card-body pt-0 pb-0 mt-5">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto">
                            <div
                                class="avatar-xs p-0 rounded-circle profile-photo-edit position-absolute end-0 bottom-0">
                                <input id="profile-img-file-input" type="file" class="profile-img-file-input d-none">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="bi bi-camera"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5>Dashboard<i class="bi bi-patch-check-fill align-baseline text-primary ms-1"></i></h5>
                            <i class='bx bx-building-house '></i>
                            <strong class="text-primary"> <i class='bx bx-user-check '></i>
                                User</strong><br>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav pb-2" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Dashboard</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href='#'>
                        <i class=" bx bx-file "></i> <span data-key="t-dashboards">Home</span>
                    </a>
                    <a class="nav-link menu-link" href='#'>
                        <i class=" bx bx-file "></i> <span data-key="t-dashboards">Contributions</span>
                    </a>
                    <a class="nav-link menu-link" href='#'>
                        <i class=" bx bx-file "></i> <span data-key="t-dashboards">My Organization</span>
                    </a>
                </li>


            </ul>


        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>

</div>