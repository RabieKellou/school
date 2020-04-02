@extends('layouts.admin')
@section('contentadmin')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add student</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Dashboard</a></li>
          <li class="breadcrumb-item active">Add student</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
    <form method="post" action="{{ route('students.store') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">first name</label>
          <div class="col-md-6"><input type="text" name="fname" class="form-control"></div>
          <div class="clearfix"></div>
        </div><div class="row">
            <label class="col-md-3">last name</label>
            <div class="col-md-6"><input type="text" name="lname" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <label class="col-md-3">CIN</label>
            <div class="col-md-6"><input type="text" name="cin" class="form-control"></div>
            <div class="clearfix"></div>
          </div><div class="row">
            <label class="col-md-3">PASSWORD</label>
            <div class="col-md-6"><input type="PASSWORD" name="title" class="form-control"></div>
            <div class="clearfix"></div>
          </div><div class="row">
            <label class="col-md-3">EMAIL</label>
            <div class="col-md-6"><input type="text" name="email" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <label class="col-md-3">SECTION</label>
            <div class="col-md-6"><input type="text" name="SECTION" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <label class="col-md-3">FILIERE</label>
            <div class="col-md-6"><input type="text" name="FILIERE" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <label class="col-md-3">date of birth</label>
            <div class="col-md-6"><input type="date" name="dob" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <label class="col-md-3">id</label>
            <div class="col-md-6"><input type="number" name="id" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info" value="add">
      </div>
    </form>
  </div>
</section>


@endsection
