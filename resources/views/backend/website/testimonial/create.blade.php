@extends('backend.layout')
@section('title','Create Testimonial')
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
                                Add Testimonial
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
                                <h4 class="card-title">Add Testimonial to Website</h4>
                            </div>
                        </div>
                        <div class="row">
                            <!-- column -->
                            <form method="post" class="form-horizontal"
                                  action="{{ route('backend.testimonial.store') }}"
                                  enctype="multipart/form-data">
                                @method('post') @csrf
                                <div class="card-body">
                                    <fieldset>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group ">

                                                    <label for="first_name"
                                                           class="text-end control-label col-form-label">Given
                                                        By</label>
                                                    <input type="text" class="form-control" id="given_by"
                                                           name="given_by"
                                                           placeholder="Enter testimonial author here"
                                                           value="{{ old('given_by') }}">
                                                    @if ($errors->has('given_by'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('given_by') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">

                                                    <label for="last_name"
                                                           class="text-end control-label col-form-label">Short
                                                        Text</label>
                                                    <input type="text" class="form-control" id="short_text"
                                                           name="short_text"
                                                           placeholder="Enter short text here"
                                                           value="{{ old('short_text') }}">
                                                    @if ($errors->has('short_text'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('short_text') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group ">

                                                    <label for="description"
                                                           class="text-end control-label col-form-label">Testimonial
                                                        Text</label>
                                                    <textarea name="description" cols="30" rows="4"
                                                              class="form-control"></textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('description') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary">
                                                    Save Testimonial
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="card-body">

                                </div>
                            </form>

                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('extra-script')

    @endpush
@endsection
