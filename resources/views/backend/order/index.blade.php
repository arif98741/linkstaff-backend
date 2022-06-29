@extends('backend.layout')
@section('title','Service Order List')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"> Service Order List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Service Order List
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
                                class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Invoice Number</th>
                                    <th>Seeker</th>
                                    <th>Provider</th>
                                    <th>Coupon</th>
                                    <th>Subtotal</th>
                                    <th>Booking Date</th>
                                    <th>Payment Status</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($service_orders as $key=> $service_order)

                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $service_order->invoice_number }}</td>
                                        <td>{{ $service_order->seeker->full_name }}</td>
                                        <td>{{ $service_order->provider->full_name }}</td>
                                        <td>{{ $service_order->coupon->coupon_code }}</td>
                                        <td>{{ $service_order->subtotal_price }}</td>
                                        <td>{{ date('d-m-Y',strtotime($service_order->booking_date)) }}</td>
                                        <td>
                                            <span
                                                class="btn btn-success btn-sm">{{ $service_order->payment_status }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="btn btn-success btn-sm">{{ $service_order->payment_status }}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary">View</a>
                                            <a href="#"
                                               class="btn btn-success">Edit</a>
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
            $("#zero_config").DataTable();
        </script>
    @endpush
@endsection
