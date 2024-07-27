@extends('layout.dash')

@section('title')
Appatment
|@endsection

@section('containt')

<!-- Fixed Header -->
<div class="card">
    <h5 class="card-header pb-0 text-md-start text-center">Apartments</h5>

    <div class="card-datatable table-responsive">
      <table class="dt-fixedheader table border-top">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Salary</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Salary</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!--/ Fixed Header -->
@endsection
