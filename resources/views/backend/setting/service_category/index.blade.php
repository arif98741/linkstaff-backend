@extends('backend.layout')
@section('title',$service_type.' Service Category List')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"> {{ $service_type }} Service Category List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $service_type }} Service Category List
                            </li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button id="addNewBtn" class="btn btn-primary">Add New
                                </button>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12" data-select2-id="15">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Service Type</th>
                                    <th>Initial Start Price</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($service_categories as $key=> $service_category)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $service_category->category_name }}</td>
                                        <td>{{ $service_category->service_type }}</td>
                                        <td>{{ $service_category->start_price }}</td>

                                        <td>{{ date('d-m-Y',strtotime($service_category->created_at)) }}</td>
                                        <td>{{ date('d-m-Y',strtotime($service_category->updated_at)) }}</td>
                                        <td>
                                            <button class="btn btn-primary editbtn"
                                                    id="{{ $service_category->id }}"><i class="mdi mdi-pencil"></i
                                                ></button>

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
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->

    </div>

    {{--    modal start--}}
    <div class="modal fade" id="ServiceCategoryAddModal" tabindex="-1" aria-labelledby="ServiceCategoryAddModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="ServiceCategoryAddModalLabel">Add New Service Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Service Category</label>
                        <input type="text" name="category_name" id="category_name" class="form-control"
                               placeholder="Enter new service category">
                    </div>
                    <div class="form-group">
                        <label for="">Category Type</label>
                        <select name="service_type" id="service_type" class="form-control">
                            <option value="">Select Type</option>
                            <option value="short">On Demand(short)</option>
                            <option value="long">Long</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Initial Start Price</label>
                        <input type="number" name="start_price" id="start_price" class="form-control"
                               placeholder="Enter initial start price">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success actionBtn" id="actionBtn">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{--    modal end--}}

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

        <script>

            $(function () {
                /**
                 * save modal data
                 */
                $('#actionBtn').click(function () {
                    let category_name = $('#category_name').val();
                    let start_price = $('#start_price').val();
                    let service_type = $('#service_type').val();

                    if ($(this).attr('action') == 'save') { //if save action
                        if (category_name.length == 0) {
                            toastr.warning(
                                "Category name should not be empty"
                            );
                        } else {
                            $.ajax({
                                url: '{{  route('backend.service.service-category.store') }}',
                                headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    category_name: category_name,
                                    start_price: start_price,
                                    service_type: service_type
                                },
                                success: function (res) {

                                    toastr.success(
                                        res.message
                                    );
                                }, error: function (xhr, status, data) {
                                    let errors = xhr.responseJSON.errors;
                                    for (const key in errors) {
                                        if (errors.hasOwnProperty(key)) {

                                            toastr.error(
                                                errors[key]
                                            );
                                        }
                                    }

                                }
                            }).done(function (result) {

                                $('#category_name').val('');
                                $('#ServiceCategoryAddModal').modal('hide');
                                location.reload();
                            });
                        }
                    } else { //if update action
                        let id = $(this).attr('id');

                        /**
                         * update ajax request
                         * @param { id } int
                         * @param { category_name } string
                         * @param { start_price } numeric
                         */
                        $.ajax({
                            url: '{{  url('backend/service/service-category') }}/' + id,
                            headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
                            type: "PUT",
                            dataType: "JSON",
                            data: {
                                category_name: category_name,
                                start_price: start_price,
                                service_type: service_type
                            },
                            success: function (res) {

                                toastr.success(
                                    res.message
                                );
                            }, error: function (xhr, status, data) {
                                let errors = xhr.responseJSON.errors;
                                for (const key in errors) {
                                    if (errors.hasOwnProperty(key)) {

                                        toastr.error(
                                            errors[key]
                                        );
                                    }
                                }
                            }
                        }).done(function (result) {

                            $('#category_name').val('');
                            $('#start_price').val('');
                            $('#ServiceCategoryAddModal').modal('hide');
                            location.reload();
                        });
                    }
                });

                /**
                 * add new data
                 */
                $('#addNewBtn').click(function () {

                    $('.actionBtn').text('Save');
                    $('.actionBtn').attr('id', 'savesubcategoryBtn');
                    $('.actionBtn').attr('action', 'save');
                    $('#ServiceCategoryAddModal').modal('show');
                });

                /**
                 * popup edit modal
                 * @param { int } id
                 */
                $('.editbtn').click(function () {
                    let id = $(this).attr('id');
                    $('.actionBtn').attr('action', 'update');
                    let service_type = $('#service_type');
                    $.ajax({
                        url: '{{  url('backend/service/service-category') }}/' + id,
                        dataType: "JSON",
                        success: function (res) {
                            $('#category_name').val(res.data.category_name);
                            $('#start_price').val(res.data.start_price);
                            $("#service_type").each(function () {
                                $(this).children("option").each(function () {
                                    if ($(this).val() == res.data.service_type) {
                                        $(this).attr('selected', '');
                                    }
                                });
                            });
                        }
                    }).done(function (result) {
                        $('.actionBtn').text('Update').attr('id', id);
                        $('#ServiceCategoryAddModal').modal('show');
                        $('#ServiceCategoryAddModalLabel').html('Edit Service Category');
                    });
                });
            });

        </script>
    @endpush
@endsection
