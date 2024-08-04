@extends('layout.dash')

@section('title')
    Add Apartment
@endsection

@section('containt')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Apartment</h5>
                {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('post-apartmentadd') }}">
                    @csrf
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="ap_name"
                                placeholder="EX: Shanti vihar" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-remark">Remark</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-remark" name="ap_remark"
                                placeholder="EX: A,B,C" />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label" for="basic-default-totfolr">Total Floor</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-default-totfolr" class="form-control" name="ap_tot_floor"
                                    placeholder="EX: 5,10,15" />
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
