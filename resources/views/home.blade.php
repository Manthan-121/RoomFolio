@extends('layout.dash')

@section('title')
    Home
@endsection

@section('containt')
    <!-- Card Border Shadow -->
    <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-primary h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-primary"><i class="bx bxs-truck bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">{{ $totApart }}</h4>
                </div>
                <p class="mb-2">Total Apartment</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-warning h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-error bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">{{ $totFlatRegi }}</h4>
                </div>
                <p class="mb-2">Total Flat Registered</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-danger h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-danger"><i
                                class="bx bx-git-repo-forked bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">{{ $totPass }}</h4>
                </div>
                <p class="mb-2">Total Pass</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-info h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-info"><i class="bx bx-time-five bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">{{ $totCategory }}</h4>
                </div>
                <p class="mb-2">Total Categories</p>
            </div>
        </div>
    </div>
    <!--/ Card Border Shadow -->

    <!-- Card Border Shadow -->
    <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-primary h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-primary"><i class="bx bxs-truck bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">{{ $tottodayEntry }}</h4>
                </div>
                <p class="mb-2">Total Today Entry</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-warning h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-error bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">{{ $tottodayExit }}</h4>
                </div>
                <p class="mb-2">Total Today Exit</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-danger h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-danger"><i
                                class="bx bx-git-repo-forked bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">{{ $totVisitor }}</h4>
                </div>
                <p class="mb-2">Total Visitor</p>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-3 col-sm-6">
        <div class="card card-border-shadow-info h-100">
            <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                    <div class="avatar me-4">
                        <span class="avatar-initial rounded bg-label-info"><i class="bx bx-time-five bx-lg"></i></span>
                    </div>
                    <h4 class="mb-0">13</h4>
                </div>
                <p class="mb-2">Total Pass</p>
            </div>
        </div>
    </div> --}}
    <!--/ Card Border Shadow -->
@endsection
