@extends('layout.dash')

@section('title')
    Pass |
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

        <h5 class="card-header pb-0 mb-4 text-md-start text-center">Pass</h5>
        <div class="card-datatable table-responsive">
            <table class="dt-fixedheader table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Category</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($passes as $index => $pass)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if ($pass->pass_img)
                                    <img src="{{ Storage::url('images/pass_img/' . $pass->pass_img) }}" alt="Pass Image"
                                        width="100" />
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>{{ $pass->pass_name }}</td>
                            <td>{{ $pass->pass_mobile }}</td>
                            <td>{{ $pass->category_name }}</td>
                            <td>{{ $pass->pass_start_date }}</td>
                            <td>{{ $pass->pass_end_date }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('showPass', ['id'=> $pass->pass_id]) }}" class="btn btn-icon btn-outline-success">
                                        <span class="tf-icons bx bx-printer"></span>
                                    </a>
                                    {{-- <a href="#" class="btn btn-icon btn-outline-primary">
                                        <span class="tf-icons bx bxs-edit"></span>
                                    </a>
                                    <button type="submit" class="btn btn-icon btn-outline-danger">
                                        <span class="tf-icons bx bx-trash"></span>
                                    </button> --}}
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">No passes found.</td>
                        </tr>
                    @endforelse

                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Category</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/ Fixed Header -->
@endsection
