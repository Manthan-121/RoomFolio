@extends('layout.dash')

@section('title')
Appatment
|@endsection

@section('containt')
<div class="card mb-6">
    <h5 class="card-header">Add New Apartment</h5>
    <form class="card-body">
      <div class="row g-6">
        <div class="col-md-6">
          <label class="form-label" for="multicol-name">Name</label>
          <input type="text" id="multicol-name" class="form-control" placeholder="EX: Shanti vihar" />
        </div>
        <div class="col-md-6">
            <label class="form-label" for="multicol-remark">Remark</label>
            <input type="text" id="multicol-remark" class="form-control" placeholder="EX: A,B,C" />
        </div>
        <div class="col-md-6">
            <div class="form-password-toggle">
                <label class="form-label" for="multicol-password">Total Floor</label>
            <div class="input-group input-group-merge">
                <input type="number" id="multicol-remark" class="form-control" placeholder="EX: 5,10,15" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-password-toggle">
            <label class="form-label" for="multicol-confirm-password"></label>
            <div class="input-group input-group-merge">
              <button type="button" class="btn rounded-pill btn-primary"><i class="fa-solid fa-plus me-2"></i> Add</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <div class="card">
    <div class="card-datatable table-responsive">
      <table class="datatables-basic table border-top">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Salary</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
@endsection
