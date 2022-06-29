@extends('backend.layout')
@section('title','Dashboard')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Site Analysis</h4>
                                <h5 class="card-subtitle">Overview of Latest Month</h5>
                            </div>
                        </div>
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-view-list fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $orders }}</h5>
                                            <small class="font-light">Total Orders</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-account fs-3 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $provider }}</h5>
                                            <small class="font-light">Total Service Providers</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-danger p-10 text-white text-center">
                                            <i class="mdi mdi-account-multiple fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $seeker }}</h5>
                                            <small class="font-light">Total Customer</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-success p-10 text-white text-center">
                                            <i class="mdi mdi-cash-usd fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">0</h5>
                                            <small class="font-light">Total Earning</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-view-list fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $orders }}</h5>
                                            <small class="font-light">Total Orders</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-account fs-3 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $provider }}</h5>
                                            <small class="font-light">Total Service Providers</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-danger p-10 text-white text-center">
                                            <i class="mdi mdi-account-multiple fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $seeker }}</h5>
                                            <small class="font-light">Total Customer</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-success p-10 text-white text-center">
                                            <i class="mdi mdi-cash-usd fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">0</h5>
                                            <small class="font-light">Total Earning</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-view-list fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $orders }}</h5>
                                            <small class="font-light">Total Orders</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-account fs-3 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $provider }}</h5>
                                            <small class="font-light">Total Service Providers</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-danger p-10 text-white text-center">
                                            <i class="mdi mdi-account-multiple fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $seeker }}</h5>
                                            <small class="font-light">Total Customer</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-success p-10 text-white text-center">
                                            <i class="mdi mdi-cash-usd fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">0</h5>
                                            <small class="font-light">Total Earning</small>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-view-list fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $orders }}</h5>
                                            <small class="font-light">Total Orders</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="mdi mdi-account fs-3 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $provider }}</h5>
                                            <small class="font-light">Total Service Providers</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-danger p-10 text-white text-center">
                                            <i class="mdi mdi-account-multiple fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">{{ $seeker }}</h5>
                                            <small class="font-light">Total Customer</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="bg-success p-10 text-white text-center">
                                            <i class="mdi mdi-cash-usd fs-3 mb-1 font-16"></i>
                                            <h5 class="mb-0 mt-1">0</h5>
                                            <small class="font-light">Total Earning</small>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- column -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <h4 class="mt-3">Monthly Order</h4>
                                <canvas style="width: 400px; " id="monthwiseChart" width="400" height="250"></canvas>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="mt-3">Last Seven day Orders</h4>
                                <canvas style="width: 400px; " id="daywiseChart" width="400" height="250"></canvas>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="mt-3">Other Chart</h4>
                                <canvas style="width: 400px; " id="otherChart" width="400" height="250"></canvas>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>

    @push('extra-script')
        <script src="{{ asset('backend/dist/js/chart.min.js') }}"></script>
        <script>
            function randomArray(length, max) {
                return Array.apply(null, Array(length)).map(function() {
                    return Math.round(Math.random() * max);
                });
            }


            //monthwise
            const monthCtx = document.getElementById('monthwiseChart');
            new Chart(monthCtx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Day wise orders',
                        data: randomArray(6,200),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: .5
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });


            //day wise
            const daywiseChartCtx = document.getElementById('daywiseChart');
            new Chart(daywiseChartCtx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: '7 days order',
                        data: randomArray(7,650),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 159, 64, 0.3)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 159, 64, 2)',
                        ],
                        borderWidth: .5
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            //day wise
            //monthwise
            const otherChartCtx = document.getElementById('otherChart');
            const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
            new Chart(otherChartCtx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Other Chart',
                        data: randomArray(6,1000),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 159, 64, 0.3)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 159, 64, 2)',
                        ],
                        borderWidth: .5
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection
