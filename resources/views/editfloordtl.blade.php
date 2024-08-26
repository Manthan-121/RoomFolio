@extends('layout.dash')

@section('title')
    Edit Floor Details
@endsection

@section('containt')

@foreach ($floors as $floor)
@php
    $floor
@endphp
@endforeach
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Floor Details</h5>
            </div>
            {{-- {{ $floor->ap_id}} --}}
            <div class="card-body">
                <form method="POST" action="{{ route('put-FloorDetailsedit', $floor->floor_id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Apartment</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example"
                                name="ap_id">
                                <option selected>Select apartment</option>
                                @foreach ($apartments as $apartment)
                                    <option value="{{ $apartment->ap_id }}"
                                        @if ($apartment->ap_id == $floor->ap_id)
                                            selected
                                        @endif
                                    >{{ $apartment->ap_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Floor No </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="basic-default-floor-no" name="floor_no"
                                placeholder="EX:1,2,3" value="{{ $floor->floor_no}}" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-flat-no">Flat no</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-default-flat-no" class="form-control" name="flat_no"
                                    placeholder="EX: 101,102,201" value="{{ $floor->flate_no}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-Owner-Name">Owner Name</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="text" id="basic-default-Owner-Name" class="form-control" name="floor_ownor"
                                    placeholder="EX: Abc Abc Abc" value="{{ $floor->floor_ownor}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label class="col-sm-2 col-form-label" for="basic-default-Owner-img">Owner Image</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="file" id="basic-default-Owner-img" class="form-control"
                                    accept=".jpg,.png,.jpeg" name="floor_ownor_img" />
                                <input type="hidden" name="hdn_floor_ownor_img" value="{{ $floor->floor_ownor_img}}">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-end mb-10">
                <div class="col-2">
                </div>
                <div class="col-4">
                    <button type="submit" name="btnSubmit" class="btn btn-primary"> Update</button>
                </div>
                <div class="col-6">
                    <img height="80px" width="80px" src="{{ asset('/storage/images/floor_owner/'.$floor->floor_ownor_img) }}" alt="{{ $floor->floor_ownor}}">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
