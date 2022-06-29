@extends('backend.layout')
@section('title','Front Service List')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Front Sevice List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Front Service List
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
                                    <th>Service Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $key=> $service)

                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $service->service_name }}</td>
                                        <td><img src="{{ asset($service->service_image_thumbnail) }}" style="width: 100px; height: 100px;" alt=""></td>
                                        <td>{{ $service->price }}</td>
                                        <td>{{ $service->status }} </td>
                                        <td>{{ date('d-m-Y',strtotime($service->created_at)) }}</td>
                                        <td>{{ date('d-m-Y',strtotime($service->updated_at)) }}</td>
                                        <td>
                                            <a href="{{ route('backend.front-service.edit',$service->id) }}"><i
                                                    class="fa fa-edit"></i></a>
                                            <form method="POST"
                                                  action="{{ route('backend.front-service.destroy',$service->id) }}"
                                                  style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-sm btn- delete-user"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                            </form>
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


            $('.delete-user').click(function (e) {
                e.preventDefault() // Don't post the form, unless confirmed
                if (confirm('Are you sure?')) {
                    // Post the form
                    $(e.target).closest('form').submit() // Post the surrounding form
                }
            });

        </script>
    @endpush
@endsection
