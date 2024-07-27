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
        <form>
          <div class="row mb-6">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-name" placeholder="EX: Shanti vihar" />
            </div>
          </div>
          <div class="row mb-6">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Remark</label>
            <div class="col-sm-10">
              <input
                type="text"
                class="form-control"
                id="basic-default-company"
                placeholder="EX: A,B,C" />
            </div>
          </div>
          <div class="row mb-2">
            <label class="col-sm-2 col-form-label" for="basic-default-email">Total Floor</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input
                  type="number"
                  id="basic-default-email"
                  class="form-control"
                  placeholder="EX: 5,10,15"
                  aria-describedby="basic-default-email2" />
              </div>
            </div>
          </div>
          </div>
          <div class="row justify-content-end mb-10">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
