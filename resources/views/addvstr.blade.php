@extends('layout.dash')

@section('title')
    Add Visitors
@endsection

@section('containt')
    <!-- Basic Layout -->
    <div class="col-xxl">
        <div class="card mb-6">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Add Visitors</h5>
                {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('visitors.store') }}">
                    @csrf
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Apartment</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="ap_id" aria-label="Default select example" name="ap_id">
                                <option selected>Select apartment</option>
                                @foreach ($apartments as $ap_id => $ap_name)
                                    <option value="{{ $ap_id }}">{{ $ap_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Flat No </label>
                        <div class="col-sm-10">
                            <select class="form-select" name="floor_id" id="floor_id" aria-label="Default select example">
                                <option selected>Select apartment</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-remark" name="vis_name"
                                placeholder="Enter visitor name" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Mobile No </label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="basic-default-remark" name="vis_mobile"
                                placeholder="Enter visitor Mobile no" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Email </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="basic-default-remark" name="vis_email"
                                placeholder="Enter visitor Email" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Who to meet </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-remark" name="vis_whom_to_meet"
                                placeholder="Enter Flat member name" />
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-sm-2 col-form-label" for="basic-default-floor-no">Reason </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter visitor reason"
                                name="vis_reason"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end mb-5">
                        <div class="col-sm-10">
                            <button type="submit" name="btnSubmit" class="btn btn-primary"> Add</button>
                        </div>
                    </div>
            </div>

            </form>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ap_id').on('change', function() {
                var ap_id = $(this).val();
                $('#floor_id').prop('disabled', true);

                if (ap_id) {
                    $.ajax({
                        url: '{{ route('getFloors') }}', // This route will fetch the floors based on apartment id
                        type: 'GET',
                        data: {
                            ap_id: ap_id
                        },
                        success: function(response) {
                            $('#floor_id').empty().append(
                                '<option value="">Select Floor</option>');
                            if (response.length > 0) {
                                response.forEach(function(floor) {
                                    $('#floor_id').append('<option value="' + floor
                                        .floor_id + '">' + floor.flate_no +
                                        '</option>');
                                });
                                $('#floor_id').prop('disabled', false);
                            } else {
                                $('#floor_id').append(
                                    '<option value="">No Flat available</option>');
                            }
                        }
                    });
                } else {
                    $('#floor_id').empty().append('<option value="">Select Floor</option>').prop('disabled',
                        true);
                }
            });
        });
    </script>
@endsection
{{-- @section('scripts')

@endsection --}}
