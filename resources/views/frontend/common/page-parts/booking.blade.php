<section class="book_section layout_padding')}}">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ url('/save-appointment') }}" method="post" id="booking-form"> @method('post') @csrf
                    <h4>
                        BOOK <span>APPOINTMENT</span>
                    </h4>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="inputPatientName">Patient Name </label>
                            <input type="text" name="patient_name" value="{{ old('patient_name') }}"
                                   class="form-control" id="inputPatientName" placeholder="">
                            @if ($errors->has('patient_name'))
                                <span class="help-block">
                                            <p class="text-red">{{ $errors->first('patient_name') }}</p> </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDoctorName">Patient Age</label>
                            <input type="number" name="age" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDepartmentName">Services</label>
                            <select name="service_id" class="form-control ">
                                <option value="" disabled selected>Select Service</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}"
                                            @if(old('service_id') == $service->id) selected @endif>{{ $service->service_name }}</option>
                                @endforeach

                            </select>
                            @if ($errors->has('service_id'))
                                <span class="help-block">
                                            <p class="text-red">{{ $errors->first('service_id') }}</p> </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                            <label for="inputPhone">Phone Number</label>
                            <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" id=""
                                   placeholder="XXXXXXXXXX">
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                            <p class="text-red">{{ $errors->first('phone') }}</p> </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputSymptoms">Email</label>
                            <input type="text" name="email" class="form-control"
                                   placeholder="something@example.com">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                            <p class="text-red">{{ $errors->first('email') }}</p> </span>
                            @endif
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Appointment Date </label>
                            <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                                <input type="text" name="appointment_date"
                                       value="{{ date('d-m-Y',strtotime(old('appointment_date'))) }}"
                                       class="form-control" readonly>
                                @if ($errors->has('appointment_date'))
                                    <span class="help-block">
                                            <p class="text-red">{{ $errors->first('appointment_date') }}</p> </span>
                                @endif
                                <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-lg-12">
                            <label for="inputSymptoms">Patient Details and Others (if available)</label>
                            <textarea name="patient_description" style="height: auto" cols="30" rows="3"
                                      class="form-control"
                                      placeholder="Enter patient past history, sign and others here ">{{ old('patient_description') }}</textarea>
                            @if ($errors->has('patient_description'))
                                <span class="help-block">
                                            <p class="text-red">{{ $errors->first('patient_description') }}</p> </span>
                            @endif
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn booking-submit-btn">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('extra-css')
    <link href="{{ asset('frontend/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('frontend/css/toastr.min.css')}}" rel="stylesheet"/>
@endpush

@push('extra-script')
    <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/toastr.min.js') }}"></script>
    <script>
        //we are sending custom script to frontend layout
        $(document).ready(function () {

            $('#booking-form').submit(function (e) {
                e.preventDefault();
                let formData = $(this).serialize();

                $.ajax({
                    url: '{{  url('save-appointment') }}',
                    headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
                    type: "POST",
                    dataType: "JSON",
                    data: formData,
                    success: function (res) {

                        toastr.success(res.message);

                    }, error: function (xhr, status, data) {
                        let errors = xhr.responseJSON.errors;
                        for (const key in errors) {
                            if (errors.hasOwnProperty(key)) {
                                toastr.warning(errors[key]);
                            }
                        }

                    }
                }).done(function (result) {

                    console.log(result);
                    // $('#booking-form :input').val('');
                });

            });


        });
    </script>
@endpush
