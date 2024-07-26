@extends('layout.dash')

@section('title')
    Profile
@endsection

@section('containt')

      <div class="col-12">
        <div class="card mb-6">
          <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-8">
            <div class="flex-shrink-0 mt-8 mx-sm-0 mx-auto">
              <img
                src="../../assets/img/avatars/1.png"
                alt="user image"
                class="d-block h-auto ms-0 ms-sm-6 rounded-3 user-profile-img" />
            </div>
            <div class="flex-grow-1 mt-3 mt-lg-5">
              <div
                class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
                <div class="user-profile-info">
                  <h4 class="mb-2 mt-lg-7">John Doe</h4>
                  <ul
                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 mt-4">
                    {{-- <li class="list-inline-item">
                      <i class="bx bx-palette me-2 align-top"></i><span class="fw-medium">UX Designer</span>
                    </li> --}}
                    <li class="list-inline-item">
                      <i class="bx bx-map me-2 align-top"></i><span class="fw-medium">Vatican City</span>
                    </li>
                    <li class="list-inline-item">
                      <i class="bx bx-calendar me-2 align-top"></i
                      ><span class="fw-medium"> Joined April 2021</span>
                    </li>
                  </ul>
                </div>
                {{-- <a href="javascript:void(0)" class="btn btn-primary mb-1">
                  <i class="bx bx-user-check bx-sm me-2"></i>Connected
                </a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Header -->

    <!-- Navbar pills -->
    <div class="row">
      <div class="col-md-12">
        <div class="nav-align-top">
          <ul class="nav nav-pills flex-column flex-sm-row mb-6">
            <li class="nav-item">
              <button class="nav-link active"><i class="bx bx-user bx-sm me-1_5"></i> Profile</button
              >
            </li>

          </ul>
        </div>
      </div>
    </div>
    <!--/ Navbar pills -->


    <!-- User Profile Content -->
    {{-- <div class="row"> --}}
        <div class="col-xl-4 col-lg-5 col-md-5">
      <div class="col">
        <!-- About User -->
        <div class="col-sm">
        <div class="card mb-6">
          <div class="card-body">
            <small class="card-text text-uppercase text-muted small">About</small>
            <ul class="list-unstyled my-3 py-1">
              <li class="d-flex align-items-center mb-4">
                <i class="bx bx-user"></i><span class="fw-medium mx-2">Full Name:</span> <span>John Doe</span>
              </li>
              <li class="d-flex align-items-center mb-4">
                <i class="bx bx-check"></i><span class="fw-medium mx-2">Status:</span> <span>Active</span>
              </li>
              <li class="d-flex align-items-center mb-4">
                <i class="bx bx-crown"></i><span class="fw-medium mx-2">Role:</span> <span>Developer</span>
              </li>
              <li class="d-flex align-items-center mb-4">
                <i class="bx bx-flag"></i><span class="fw-medium mx-2">Country:</span> <span>USA</span>
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="bx bx-detail"></i><span class="fw-medium mx-2">Languages:</span>
                <span>English</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
        <div class="col-sm">
        <div class="card mb-6">
            <div class="card-body">
                <small class="card-text text-uppercase text-muted small">Contacts</small>
            <ul class="list-unstyled my-3 py-1">
              <li class="d-flex align-items-center mb-4">
                <i class="bx bx-phone"></i><span class="fw-medium mx-2">Contact:</span>
                <span>(123) 456-7890</span>
              </li>
              <li class="d-flex align-items-center mb-4">
                <i class="bx bx-chat"></i><span class="fw-medium mx-2">Skype:</span> <span>john.doe</span>
              </li>
              <li class="d-flex align-items-center mb-4">
                <i class="bx bx-envelope"></i><span class="fw-medium mx-2">Email:</span>
                <span>john.doe@example.com</span>
              </li>
            </ul>
            </div>
          </div>
        </div>
        <!--/ About User -->
      </div>
      {{-- </div> --}}
@endsection
