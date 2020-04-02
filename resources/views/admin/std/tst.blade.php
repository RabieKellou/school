@extends('layouts.admin')

@section('contentadmin')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">student</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <p>
            <a href="#" class="btn btn-primary">Add New student</a>
        </p>
        <table class="table table-bordered table-striped">
            <tr>
                <th>cin</th>
                <th>first name</th>
                <th>last name</th>
                <th>filiere</th>

                <th>section</th>
                <th>Action</th>
            </tr>
            @foreach($users as $c)
                <tr>
                    <td>{{ $c->cni }}</td>
                    <td>{{ $c->first_name  }}</td>
                    <td>{{ $c->last_name }}</td>
                    <td></td>
                    <td></td>



                    <td>
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                        <form action="#" method="post">
                            @method('DELETE')
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection
