@extends('layout.loginl')

@section('title')
    Forgot Password
@endsection

@section('content')
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Forgot Password -->
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
            <h4 class="mb-1">Forgot Password? 🔒</h4>
            <p class="mb-6">Enter your email and we'll send you instructions to reset your password</p>
            <form id="formAuthentication" class="mb-6" action="auth-reset-password-basic.html" method="GET">
              <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  autofocus />
              </div>
              <a href="{{ route('reset-pwd') }}" class="btn btn-primary d-grid w-100">Send Reset Link</a>
            </form>
            <div class="text-center">
              <a href="{{ route('login') }}" class="d-flex justify-content-center">
                <i class="bx bx-chevron-left scaleX-n1-rtl me-1"></i>
                Back to login
              </a>
            </div>
          </div>
        </div>
        <!-- /Forgot Password -->
      </div>
    </div>
  </div>

  <!-- / Content -->
@endsection
