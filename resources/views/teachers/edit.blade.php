@extends('layouts.admin') @section('contentadmin')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Modifier les informations d'un enseignant</h1>
            </div>
            {{-- <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active">Modification</li>
                </ol>
            </div>
            <!-- /.col --> --}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <form method="post" action="">
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="row">
                    <label class="col-md-3">Nom</label>
                    <div class="col-md-6"><input type="text" name="fname" class="form-control" value="{{$user->fname}}">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <label class="col-md-3">Prénom</label>
                    <div class="col-md-6"><input type="text" name="lname" class="form-control" value="{{$user->lname}}">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <label class="col-md-3">CIN</label>
                    <div class="col-md-6"><input type="text" name="user_cin" class="form-control"
                            value="{{$user->user_cin}}"></div>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
                    <label class="col-md-3">Email</label>
                    <div class="col-md-6"><input type="text" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <label for="dept" class="col-md-3">Departement</label>
                    <div class="col-md-6">
                        <select class="form-control" name="dept" id="dept">
                            @foreach ($depts as $dept)
                            <option value="{{ $dept->dept_id }}" @if($user->teacher->department->dept_id ===
                                $dept->dept_id) selected @endif > {{ $dept->dept_name }}</option>
                            @endforeach

                        </select>
                    </div>
                    {{-- <div class="col-md-6"><input type="text" name="dept" class="form-control" value="{{$user->student->department->dept_name}}">
                </div> --}}
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <label class="col-md-3">date of birth</label>
                <div class="col-md-6"><input type="date" name="dob" class="form-control" value="{{$user->dob}}">
                </div>
                <div class="clearfix"></div>
            </div>


    </div>

    </form>
    </div>
</section>


@endsection
