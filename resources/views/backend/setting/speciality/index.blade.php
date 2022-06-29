@extends('backend.layout')
@section('title','Speciality List')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Speciality List</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Speciality List
                            </li>
                        </ol>
                    </nav>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <button id="addNewBtn"
                                        class="btn btn-primary">Add
                                    New
                                </button>
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
                                class="table table-striped table-bordered"
                            >
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Speciality Name</th>
                                    <th>Expertise</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($specialities as $key=> $speciality)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $speciality->speciality_name }}</td>
                                        <td>{{ $speciality->expertise->expertise_name }}</td>

                                        <td>{{ date('d-m-Y',strtotime($speciality->created_at)) }}</td>
                                        <td>{{ date('d-m-Y',strtotime($speciality->updated_at)) }}</td>
                                        <td>
                                            <button class="btn btn-primary editbtn"
                                                    id="{{ $speciality->id }}"><i class="mdi mdi-pencil"></i
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
            <!-- Column -->

            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->

    </div>

    {{--    modal start--}}
    <div class="modal fade" id="SpecialityAddModal" tabindex="-1" aria-labelledby="SpecialityAddModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="SpecialityAddModalLabel">Add New Speciality</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Speciality </label>
                        <input type="text" name="speciality_name" id="speciality_name" class="form-control"
                               placeholder="Enter new speciality">
                    </div>

                    <div class="form-group">
                        <label for="">Expertises </label>
                        <select name="expertise_id" id="expertise_id" class="form-control">

                        </select>
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
                    let speciality_name = $('#speciality_name').val();
                    let expertise_id = $('#expertise_id option:selected').val();

                    if ($(this).attr('action') == 'save') { //if save action
                        if (speciality_name.length == 0) {
                            toastr.warning(
                                "Speciality name should not be empty"
                            );
                        } else if (expertise_id.length == 0) {
                            toastr.warning(
                                "Expertise  should not be empty"
                            );
                        } else {
                            $.ajax({
                                url: '{{  route('backend.specialities.store') }}',
                                headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    speciality_name: speciality_name,
                                    expertise_id: expertise_id
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

                                $('#speciality_name').val('');
                                $('#SpecialityAddModal').modal('hide');
                                location.reload();
                            });
                        }
                    } else { //if update action

                        let id = $(this).attr('id');

                        /**
                         * update ajax request
                         * @param { id } int
                         * @param { speciality_name } string
                         */
                        $.ajax({
                            url: '{{  url('backend/specialities') }}/' + id,
                            headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
                            type: "PUT",
                            dataType: "JSON",
                            data: {
                                speciality_name: speciality_name,
                                expertise_id: expertise_id,
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

                            $('#speciality_name').val('');
                            $('#SpecialityAddModal').modal('hide');
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
                    $('#SpecialityAddModal').modal('show');
                    $.ajax({
                        url: '{{  route('backend.expertise.index') }}',
                        dataType: "JSON",
                        success: function (res) {

                            let expertise_id = $('#expertise_id');
                            expertise_id.empty();
                            expertise_id.append('<option selected="true" disabled>Choose Expertise</option>');
                            expertise_id.prop('selectedIndex', 0);
                            $.each(res, function (key, entry) {
                                expertise_id.append($('<option></option>').attr('value', entry.id).text(entry.expertise_name));
                            })
                        }
                    }).done(function (result) {
                    });

                });

                /**
                 * popup edit modal
                 * @param { int } id
                 */
                $('.editbtn').click(function () {
                    let id = $(this).attr('id');
                    $('.actionBtn').attr('action', 'update');
                    $.ajax({
                        url: '{{  url('backend/specialities/') }}/' + id,
                        dataType: "JSON",
                        async: false,
                        global: false,
                        success: function (res) {
                            $('#speciality_name').val(res.data.speciality_name);
                        }
                    }).done(function (result) {

                        $('.actionBtn').text('Update').attr('id', id);
                        $('#SpecialityAddModalLabel').html('Edit Speciality');
                        $('#SpecialityAddModal').modal('show');


                        $.ajax({
                            url: '{{  route('backend.expertise.index') }}',
                            dataType: "JSON",
                            success: function (res) {

                                let expertise_id = $('#expertise_id');
                                expertise_id.empty();
                                expertise_id.append('<option disabled>Choose Expertise</option>');
                                expertise_id.prop('selectedIndex', 0);
                                $.each(res, function (key, entry) {
                                    if (entry.id == result.data.expertise_id) {

                                        expertise_id.append($('<option></option>').attr('value', entry.id).attr('selected', '').text(entry.expertise_name));
                                    } else {
                                        expertise_id.append($('<option></option>').attr('value', entry.id).text(entry.expertise_name));
                                    }
                                })
                            }
                        }).done(function (result) {
                        });
                    });

                });

            });

        </script>

    @endpush
@endsection
