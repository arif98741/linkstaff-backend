@extends('backend.layout')
@section('title','Coupon List')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Coupon List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Coupon List
                            </li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('backend.coupon.create') }}" id="addNewBtn" class="btn btn-primary">Add
                                    New</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-md-12" data-select2-id="15">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                id="zero_config"
                                class="table table-striped table-bordered text-center"
                            >
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Usage Limit</th>
                                    <th>Limit P/User</th>
                                    <th>Limit P/Day</th>
                                    <th>Expire On</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($coupons as $key=> $coupon)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $coupon->coupon_code }}</td>
                                        <td>{{ $coupon->usage_limit }}</td>
                                        <td>{{ $coupon->usage_limit_per_user }}</td>
                                        <td>{{ $coupon->per_day_usage }}</td>

                                        <td>{{ date('d-m-Y',strtotime($coupon->expiration)) }}</td>
                                        <td>
                                            @if($coupon->status == 1)
                                                <span class="btn btn-success btn-sm">Active</span>
                                            @else
                                                <span class="btn btn-warning btn-sm">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ date('d-m-Y',strtotime($coupon->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('backend.coupon.edit',$coupon->id) }}"
                                               class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i>
                                            </a>
                                        <!--                                            <a href="{{ route('backend.coupon.edit',$coupon->id) }}"
                                               class="btn btn-danger btn-sm"><i class="ti ti-trash"></i>
                                            </a>-->

                                            <form method="POST"
                                                  action="{{ route('backend.coupon.destroy',$coupon->id) }}"
                                                  style="display: inline-block">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm delete-user"><i
                                                        class="fa ti ti-trash"></i></button>

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
        </div>
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

            /**
             * ==================================
             * Delete Coupon
             * ========================================
             */
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
