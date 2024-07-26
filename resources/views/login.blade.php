@extends('layout.loginl')


@section('title')
    Login
@endsection

@section('content')
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card px-sm-6 px-0">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">

                <span class="app-brand-logo demo">
                    <img src="../../assets/icon.png" height="30" width="30" alt="icon">
                </span>
                <span class="app-brand-text demo text-heading fw-bold">RoomFoliyo</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-5">Welcome to RoomFoliyo! 👋</h4>

            <form id="formAuthentication" class="mb-6" action="#" method="GET">
              <div class="mb-6">
                <label for="email" class="form-label">Email </label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  autofocus />
              </div>
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-8">
                <div class="d-flex justify-content-between mt-8">
                  <div class="form-check mb-0 ms-2">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                  <a href="{{ route('forgot-pwd') }}">
                    <span>Forgot Password</span>
                  </a>
                </div>
              </div>
              <div class="mb-5">
                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
              </div>
            </form>


          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->
@endsection
