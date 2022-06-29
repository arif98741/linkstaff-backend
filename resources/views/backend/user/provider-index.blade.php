@extends('backend.layout')
@section('title','Users List')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">User List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Users List
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-12" data-select2-id="15">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                id="zero_config"
                                class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Mobile</th>
                                    <th>Speciality</th>
                                    <th>R. Date</th>
                                    <th>D.Verified</th>
                                    <th>Docs</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key=> $user)

                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $user->full_name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->speciality }}</td>
                                        <td>{{ date('d-m-Y',strtotime($user->created_at)) }}</td>
                                        <td>@if($user->documents_verified == 1) <span
                                                class="badge bg-success float-end d-block">Yes</span> @else <span
                                                class="badge bg-dark float-end">No</span> @endif
                                        </td>
                                        <td><a href="{{ url('backend/user-files',$user->id) }}"><i class="fa fa-forward"></i></a></td>
                                        <td>@if($user->status == 1) <span class="badge bg-success float-end d-block">Active</span> @else
                                                <span class="badge bg-dark float-end">Inactive</span> @endif

                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('backend.user.edit',$user->id) }}"
                                               class="btn btn-success btn-sm"><i class="fa fa-pencil-alt text-white"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Column -->

            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->


    </div>

    @push('extra-css')
        <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}"
              rel="stylesheet"/>
    @endpush

    @push('extra-script')

        <script src="{{asset('backend/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
        <script src="{{asset('backend/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
        <script src="{{asset('backend/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
        <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
            $("#zero_config").DataTable();
        </script>
    @endpush
@endsection
