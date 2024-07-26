@extends('layout.loginl')

@section('title')
Reset Password
@endsection

@section('content')
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Reset Password -->
        <div class="card px-sm-6 px-0">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-6">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img src="../../assets/icon.png" height="30" width="30" alt="icon">
                </span>
                <span class="app-brand-text demo text-heading fw-bold">RoomFoliyo</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-1">Reset Password 🔒</h4>
            <p class="mb-6">
              <span class="fw-medium">Your new password must be different from previously used passwords</span>
            </p>
            <form id="formAuthentication" action="auth-login-basic.html" method="GET">
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">New Password</label>
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
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="confirm-password">Confirm Password</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="confirm-password"
                    class="form-control"
                    name="confirm-password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100 mb-6">Set new password</button>
              <div class="text-center">
                <a href="{{ route('login') }}">
                  <i class="bx bx-chevron-left scaleX-n1-rtl me-1 align-top"></i>
                  Back to login
                </a>
              </div>
            </form>
          </div>
        </div>
        <!-- /Reset Password -->
      </div>
    </div>
  </div>

  <!-- / Content -->
@endsection
