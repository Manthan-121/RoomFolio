@extends('layout.dash')

@section('title')
    Add Floor Details
@endsection

@section('containt')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Floor Details</h5>
                {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('postFloorDetails') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Apartment</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                                name="ap_id">
                                <option selected>Select apartment</option>
                                @foreach ($apartments as $apartment)
                                    <option value="{{ $apartment->ap_id }}">{{ $apartment->ap_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Floor No </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="basic-default-floor-no" name="floor_no"
                                placeholder="EX:1,2,3" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-flat-no">Flat no</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-default-flat-no" class="form-control" name="flat_no"
                                    placeholder="EX: 101,102,201" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-Owner-Name">Owner Name</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-default-Owner-Name" class="form-control" name="floor_ownor"
                                    placeholder="EX: Abc Abc Abc" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label" for="basic-default-Owner-img">Owner Image</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="file" id="basic-default-Owner-img" class="form-control"
                                    accept=".jpg,.png,.jpeg" name="floor_ownor_img" />
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-end mb-10">
                <div class="col-sm-10">
                    <button type="submit" name="btnSubmit" class="btn btn-primary"> Add</button>
                </div>
            </div>

            </form>
        </div>
    </div>
    </div>
@endsection
