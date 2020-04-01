@extends('layouts.admin') @section('contentadmin') {{--
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Etudiants</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard </li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <p>
            <a href="{{ route('students.create')}}" class="btn btn-primary"><i class="fa fa-graduation-cap"
    aria-hidden="true"></i> Nouveau etudiant</a>
        </p>
        <table class="table  table-bordered table-striped table-responsive">
            <tr>
                <th>CIN</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Sexe</th>
                <th>Action</th>
            </tr>
            @foreach($students as $std)
            <tr>
                <td>{{ $std->user_cin }}</td>
                <td>{{ $std->lname }}</td>
                <td>{{ $std->fname }}</td>
                <td>{{ $std->email }}</td>
                <td>{{ $std->gender }}</td>




                <td class="d-flex">
                    <a href="{{ route('students.show',$std->user_id) }}" class="btn btn-sm btn-info mr-1" data-toggle="tooltip" data-placement="top" title="profile"><i class="fa fa-user" aria-hidden="true"></i></a>
                    <a href="{{ route('students.edit',$std->user_id) }}" class="btn btn-sm btn-info mr-1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-user-edit"></i></a>
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-sm btn-danger" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    <form action="#" method="post">
                        @method('DELETE') @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</section> --}}


<div class="content-header" id="admin">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Etudiants</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                {{--
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length"
                                    aria-controls="example1"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"
                                    class="form-control form-control-sm" placeholder=""
                                    aria-controls="example1"></label>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156.7px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 203.917px;" aria-label="CIN: activate to sort column ascending">
                                        CIN</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 203.917px;" aria-label="Nom: activate to sort column ascending">
                                        Nom</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180.1px;" aria-label="Prénom: activate to sort column ascending">
                                        Prénom</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 132.5px;" aria-label="Email: activate to sort column ascending">
                                        Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 91.7833px;" aria-label="Sexe: activate to sort column ascending">
                                        Sexe</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 91.7833px;" aria-label="Action: activate to sort column ascending">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $std)
                                <tr role="row" class="odd">
                                    <td>{{ $std->user_id }}</td>
                                    <td>{{ $std->user_cin }}</td>
                                    <td class="sorting_1">{{ $std->lname }}</td>
                                    <td>{{ $std->fname }}</td>
                                    <td>{{ $std->email }}</td>
                                    <td>{{ $std->gender }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('students.show',$std->user_id) }}" class="btn btn-sm btn-info mr-1" data-toggle="tooltip" data-placement="top" title="profile"><i class="fa fa-user" aria-hidden="true"></i></a>
                                        <a href="{{ route('students.edit',$std->user_id) }}" class="btn btn-sm btn-info mr-1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-user-edit"></i></a>
                                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-sm btn-danger" data-placement="top" title="Delete"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                        <form action="#" method="post">
                                            @method('DELETE') @csrf
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr role="row" class="odd">
                                    <p>pas etudiants</p>
                                </tr>
                                @endforelse
                                <!-- <tr role="row" class="even">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>2+</td>
                                <td>1.8</td>
                                <td>A</td>
                            </tr> -->


                            </tbody>
                            {{--
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">CIN</th>
                                    <th rowspan="1" colspan="1">Nom</th>
                                    <th rowspan="1" colspan="1">Prénom</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Sexe</th>
                                    <th rowspan="1" colspan="1">Action</th>

                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                </div>
                {{--
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 57 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item next disabled" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    @endsection


    {{-- <script>
        function getData(route) {
            console.log("route: " + route);

            fetch(route)
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text();
                }).then(function(response) {
                    console.log(response);
                });


        }

        getData(window.location);
    </script> --}}
