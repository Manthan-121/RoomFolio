@extends('layout.dash')

@section('title')
    Apatment |
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

    <!-- Fixed Header -->
    <div class="card">

        <h5 class="card-header pb-0 mb-4 text-md-start text-center">Apartments</h5>
        <div class="card-datatable table-responsive">
            <table class="dt-fixedheader table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Remark</th>
                        <th>Total Floor</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sqn = 1;
                    @endphp
                    @foreach ($apartments as $apartment)
                        <tr>
                            <td>{{ $sqn }}</td>
                            <td>{{ $apartment->ap_name }}</td>
                            <td>{{ $apartment->ap_remark }}</td>
                            <td>{{ $apartment->ap_tot_floor }}</td>
                            <td>{{ $apartment->created_at }}</td>
                            <td>
                                <div class="d-flex">
                                <a href="{{ route('apartmentedit', $apartment->ap_id) }}" class="btn btn-icon btn-outline-primary">
                                    <span class="tf-icons bx bxs-edit"></span>
                                </a>
                                <form action="{{ route('apatmentdelete', $apartment->ap_id) }}" method="POST">
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
                        <th>Name</th>
                        <th>Remark</th>
                        <th>Total Floor</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/ Fixed Header -->
@endsection
