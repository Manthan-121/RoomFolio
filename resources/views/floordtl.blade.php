@extends('layout.dash')

@section('title')
    Floor Details |
@endsection

@section('containt')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('del-success'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{ session('del-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('edt-success'))
        <div class="alert alert-info alert-dismissible" role="alert">
            {{ session('edt-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">

        <h5 class="card-header pb-0 mb-4 text-md-start text-center">Floor Details</h5>
        <div class="card-datatable table-responsive">
            <table class="dt-fixedheader table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Flat No</th>
                        <th>Owner</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sqn = 1;
                    @endphp
                    @foreach ($floors as $floor)
                        <tr>
                            <td>{{ $sqn }}</td>
                            <td>
                                <img height="75px" width="75px" src="{{ asset('/storage/images/floor_owner/'.$floor->floor_ownor_img) }}" alt="owner_img_{{ $sqn}}">
                            </td>
                            <td>{{ $floor->ap_remark }} {{$floor->flate_no}}</td>
                            <td>{{ $floor->floor_ownor }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('FloorDetails') }}" class="btn btn-icon btn-outline-primary">
                                        <span class="tf-icons bx bxs-edit"></span>
                                    </a>
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-outline-danger">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @php
                            $sqn++;
                        @endphp
                    @endforeach
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Flat No</th>
                        <th>Owner</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/ Fixed Header -->
@endsection
