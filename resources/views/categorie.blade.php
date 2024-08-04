@extends('layout.dash')

@section('title')
    Categorie |
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

    @if (isset($category))
        <div class="card mb-2">
            <h5 class="card-header">Edit Categorie</h5>
            <form class="card-body" method="POST" action="{{ route('put-Categorieedit',$category->cat_id) }}">
                @csrf
                @method('PUT')
                <div class="row g-6">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-name">Name</label>
                        <input type="text" id="multicol-name" class="form-control" placeholder="EX: Driver, Cleaner"
                            name="cat_name" value="{{ $category->cat_name}}"/>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-remark">Short Description</label>
                        <input type="text" id="multicol-remark" class="form-control" placeholder="Short Description"
                            name="cat_description" value="{{ $category->cat_description }}"/>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary me-3">Update</button>
                        <a href="{{ route('Categorie') }}" class="btn btn-label-secondary">Cancel</a>
                    </div>

                </div>
            </form>
        </div>
    @else
        <div class="card mb-2">
            <h5 class="card-header">Add New Categorie</h5>
            <form class="card-body" method="POST" action="{{ route('postCategorie') }}">
                @csrf
                <div class="row g-6">
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-name">Name</label>
                        <input type="text" id="multicol-name" class="form-control" placeholder="EX: Driver, Cleaner"
                            name="cat_name" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multicol-remark">Short Description</label>
                        <input type="text" id="multicol-remark" class="form-control" placeholder="Short Description"
                            name="cat_description" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>
            </form>
        </div>
    @endif

    <!-- Fixed Header -->
    <div class="card">

        <h5 class="card-header pb-0 mb-4 text-md-start text-center">Categorie</h5>
        <div class="card-datatable table-responsive">
            <table class="dt-fixedheader table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sqn = 1;
                    @endphp
                    @foreach ($categories as $categories)
                        <tr>
                            <td>{{ $sqn }}</td>
                            <td>{{ $categories->cat_name }}</td>
                            <td>{{ $categories->cat_description }}</td>
                            <td>{{ $categories->created_at }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('Categorieedit', $categories->cat_id) }}"
                                        class="btn btn-icon btn-outline-primary">
                                        <span class="tf-icons bx bxs-edit"></span>
                                    </a>
                                    <form action="{{ route('Categoriedelete', $categories->cat_id) }}" method="POST">
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
                        <th>Description</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/ Fixed Header -->
@endsection
