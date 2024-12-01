@extends('layout.dash')

@section('title')
    Add Pass
@endsection

@section('containt')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Create Pass</h5>
                {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('pass.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Categorie</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="pass_cat">
                                <option selected>Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-remark" name="pass_name"
                                placeholder="Enter name" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Mobile No </label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="basic-default-remark" name="pass_mobile"
                                placeholder="Enter Mobile no" />
                        </div>
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Email </label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="basic-default-remark" name="pass_email"
                                placeholder="Enter Email" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Address </label>
                        <div class="col-sm-4">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter address"
                                name="pass_address"></textarea>
                        </div>
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Descriptions </label>
                        <div class="col-sm-4">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Enter short description for pass" name="pass_description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Start Date </label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="basic-default-remark" name="pass_start_date" />
                        </div>
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">End Date </label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="basic-default-remark" name="pass_end_date" />
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Select Image</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="basic-default-remark" name="pass_img" />
                        </div>
                    </div>

                    <div class="row justify-content-end mb-5">
                        <div class="col-sm-10">
                            <button type="submit" name="btnSubmit" class="btn btn-primary"> Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
{{-- @section('scripts')

@endsection --}}
