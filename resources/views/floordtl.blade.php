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
                        <th>Floor</th>
                        <th>Appartment</th>
                        <th>Owner Name</th>
                        <th>Floor No</th>
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
                            <td>{{ $floor->floor_ownor_img }}</td>
                            <td>{{ $floor->ap_name }}</td>
                            <td>{{ $floor->floor_ownor }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('FloorDetails') }}" class="btn btn-icon btn-outline-primary">
                                        <span class="tf-icons bx bxs-edit"></span>
                                    </a>
                                    {{-- <form action="{{ route('Categoriedelete', $categories->cat_id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-outline-danger">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </button>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                        @php
                            $sqn++;
                        @endphp
                    @endforeach
                    <tr>
                        <td>1</td>
                        <td>Demo Image</td>
                        <td>Shanti Vihar</td>
                        <td>Manthan Mistry</td>
                        <td>5</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-edit"></span>
                                </a>
                                <a href="#" class="btn btn-icon btn-outline-danger">
                                    <span class="tf-icons bx bx-trash"></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Appartment</th>
                        <th>Owner Name</th>
                        <th>Floor</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/ Fixed Header -->
@endsection
