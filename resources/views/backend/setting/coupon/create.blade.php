@extends('backend.layout')
@section('title','Add Coupon')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="{{ route('backend.coupon.index') }}">Coupon List</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Coupon
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

                        <div class="row">
                            <!-- column -->
                            <form method="post" class="form-horizontal" action="{{ route('backend.coupon.store') }}"
                                  enctype="multipart/form-data">
                                @method('post') @csrf
                                <div class="card-body">
                                    <fieldset>
                                        <legend>Add Coupon</legend>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group ">

                                                    <label for="first_name"
                                                           class="text-end control-label col-form-label">Coupon
                                                        Code</label>
                                                    <input type="text" class="form-control" id="coupon_code"
                                                           name="coupon_code"
                                                           placeholder="Enter coupon code here"
                                                           value="{{ old('coupon_code') }}">
                                                    @if ($errors->has('coupon_code'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('coupon_code') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label for="first_name"
                                                           class="text-end control-label col-form-label">Usage
                                                        Limit</label>
                                                    <input type="number" class="form-control" id="usage_limit"
                                                           name="usage_limit"
                                                           placeholder="Enter usage limit here"
                                                           value="{{ old('usage_limit') }}">
                                                    @if ($errors->has('usage_limit'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('usage_limit') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label for="first_name"
                                                           class="text-end control-label col-form-label">Usage
                                                        Limit Per User</label>
                                                    <input type="number" class="form-control" id="usage_limit_per_user"
                                                           name="usage_limit_per_user"
                                                           placeholder="Enter usage limit per user here"
                                                           value="{{ old('usage_limit_per_user') }}">
                                                    @if ($errors->has('usage_limit_per_user'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('usage_limit_per_user') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label for="first_name"
                                                           class="text-end control-label col-form-label">Per Day
                                                        Usage</label>
                                                    <input type="number" class="form-control" id="per_day_usage"
                                                           name="per_day_usage"
                                                           placeholder="Enter per day usage here"
                                                           value="{{ old('per_day_usage') }}">
                                                    @if ($errors->has('per_day_usage'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('per_day_usage') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label for="first_name"
                                                           class="text-end control-label col-form-label">Expire
                                                        On</label>
                                                    <input type="date" class="form-control" id="expiration"
                                                           name="expiration"
                                                           placeholder="Enter usage limit per user here"
                                                           value="{{ old('expiration') }}">
                                                    @if ($errors->has('expiration'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('expiration') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <label for="first_name"
                                                           class="text-end control-label col-form-label">Status</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="1">Active</option>
                                                        <option value="0">Not Active</option>
                                                    </select>
                                                    @if ($errors->has('expire_on'))
                                                        <span class="help-block">
                                            <p class="text-red">{{ $errors->first('expire_on') }}</p> </span>
                                                    @endif

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-save"></i> Save
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
