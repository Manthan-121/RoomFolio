@extends('layout.dash')

@section('title')
    Visitors |
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
    @elseif (session('exit-success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('exit-success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Fixed Header -->
    <div class="card">

        <h5 class="card-header pb-0 mb-4 text-md-start text-center">Visitors</h5>
        <div class="card-datatable table-responsive">
            <table class="dt-fixedheader table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Flat No</th>
                        <th>Name</th>
                        <th>Reason</th>
                        <th>Entry</th>
                        <th>Exit</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sqn = 1;
                    @endphp
                    @foreach ($visitors as $visitors)
                        <tr>
                            <td>{{ $sqn }}</td>
                            <td>{{ $visitors->ap_remark }} {{ $visitors->flate_no }}</td>
                            <td>{{ $visitors->vis_name }}</td>
                            <td>{{ $visitors->vis_reason }}</td>
                            <td>{{ $visitors->vis_entry_date }} {{ $visitors->vis_entry_time }}</td>
                            <td>
                                @if ($visitors->vis_exit_date == null && $visitors->vis_exit_date == null)
                                    <form action="{{ route('exit') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="vid" value="{{ $visitors->vis_id  }}">
                                        <button type="submit" class="btn btn-icon btn-success">
                                            <span class="tf-icons bx bx-exit"></span>
                                        </button>
                                    </form>
                                @else
                                    {{ $visitors->vis_exit_date }} {{ $visitors->vis_exit_time }}
                                @endif
                            </td>
                            {{-- <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-icon btn-outline-primary">
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
                            </td> --}}
                        </tr>
                        @php
                            $sqn++;
                        @endphp
                    @endforeach
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Flat No</th>
                        <th>Name</th>
                        <th>Reason</th>
                        <th>Entry</th>
                        <th>Exit</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/ Fixed Header -->
@endsection
