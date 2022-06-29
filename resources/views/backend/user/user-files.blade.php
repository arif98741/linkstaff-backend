@extends('backend.layout')
@section('title','User Uploaded Document List')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">User Uploaded Document List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="{{ route('backend.user.index') }}/?role=3">Provider List</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                User Uploaded Document List
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <h4>Provider: {{ $user->full_name }}</h4>
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

                                class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="10%">#</th>
                                    <th width="20%">Doc or Link</th>
                                    <th width="15%">File link</th>
                                    <th width="20%">Registration Date</th>
                                    <th width="10%">Status</th>
                                    <th width="20%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($documents as $key=> $document)

                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td><a href="{{ $document->doc_or_link }}"></a></td>
                                        <td><a href="{{ asset($document->file) }}">{{ asset($document->file) }}</a></td>
                                        <td>{{ date('d-m-Y',strtotime($document->created_at)) }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                            <a href="{{ route('backend.user.edit',$document->id) }}"
                                               class="btn btn-success">Edit</a>
                                        </td>
                                        <td></td>
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
