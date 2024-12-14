@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/style.css">

    {{-- custom style part start --}}
    <style>
        .error {
            color: rgba(255, 0, 0, 0.6);
            font-weight: 500;
            margin-top: -1rem;
            margin-bottom: 1rem;
            margin-left: 10px;
            font-style: italic;
        }
    </style>
    {{-- custom style part end --}}

    {{-- main content part start --}}
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 d-flex justify-content-between align-items-center">
                    <h4 class="page-title">Add Patient</h4>
                    <a href="{{ route('patients') }}" class="btn btn btn-primary btn-rounded float-right m-b-20"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('patients-store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="patient_first_name"
                                        value="{{ old('patient_first_name') }}">
                                </div>
                                @error('patient_first_name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="patient_last_name"
                                        value="{{ old('patient_last_name') }}">
                                </div>
                                @error('patient_last_name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="patient_username"
                                        value="{{ old('patient_username') }}">
                                </div>
                                @error('patient_username')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="patient_email"
                                        value="{{ old('patient_email') }}">
                                </div>
                                @error('patient_email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group position-relative">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="patient_password"
                                        value="{{ old('patient_password') }}" id="custom_password1">
                                    <i class="fa fa-eye position-absolute"
                                        style="top: 60%; right: 5%; cursor:pointer;" onclick="togglePassword1()"></i>
                                </div>
                                @error('patient_password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group position-relative">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="patient_confirm_password"
                                        value="{{ old('patient_confirm_password') }}" id="custom_password2">
                                    <i class="fa fa-eye position-absolute"
                                        style="top: 60%; right: 5%; cursor:pointer;" onclick="togglePassword2()"></i>
                                </div>
                                @error('patient_confirm_password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="Day/Month/Year"
                                            name="patient_date_of_birth" value="{{ old('patient_date_of_birth') }}">
                                    </div>
                                </div>
                                @error('patient_date_of_birth')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label class="gen-label">Gender <span class="text-danger">*</span></label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="patient_gender" value="Male"
                                                class="form-check-input"
                                                {{ old('patient_gender') == 'Male' ? 'checked' : '' }}>Male
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="patient_gender" value="Female"
                                                class="form-check-input"
                                                {{ old('patient_gender') == 'Female' ? 'checked' : '' }}>Female
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="patient_gender" value="Others"
                                                class="form-check-input"
                                                {{ old('patient_gender') == 'Others' ? 'checked' : '' }}>Others
                                        </label>
                                    </div>
                                </div>
                                @error('patient_gender')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- custom part start --}}
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Department <span class="text-danger">*</span></label>
                                            <select class="form-control select" name="patient_department">
                                                <option value="">Select Department</option>
                                                <option
                                                    {{ old('patient_department') == 'Psychiatrists' ? 'selected' : '' }}>
                                                    Psychiatrists </option>
                                                <option
                                                    {{ old('patient_department') == 'Gastroenterology' ? 'selected' : '' }}>
                                                    Gastroenterology</option>
                                                <option
                                                    {{ old('patient_department') == 'Rheumatology' ? 'selected' : '' }}>
                                                    Rheumatology</option>
                                                <option {{ old('patient_department') == 'Surgeon' ? 'selected' : '' }}>
                                                    Surgeon</option>
                                                <option {{ old('patient_department') == 'Dental' ? 'selected' : '' }}>
                                                    Dental</option>
                                                <option {{ old('patient_department') == 'Cardiology' ? 'selected' : '' }}>
                                                    Cardiology</option>
                                                <option {{ old('patient_department') == 'Orthopedist' ? 'selected' : '' }}>
                                                    Orthopedist</option>
                                                <option {{ old('patient_department') == 'Dermatology' ? 'selected' : '' }}>
                                                    Dermatology</option>
                                                <option
                                                    {{ old('patient_department') == 'Emergency Medicine' ? 'selected' : '' }}>
                                                    Emergency Medicine</option>
                                            </select>
                                        </div>
                                        @error('patient_department')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Blood Group <span class="text-danger">*</span></label>
                                            <select class="form-control select" name="patient_blood_group">
                                                <option value="">Select Blood Group</option>
                                                <option {{ old('patient_blood_group') == 'A+' ? 'selected' : '' }}>A+
                                                </option>
                                                <option {{ old('patient_blood_group') == 'A-' ? 'selected' : '' }}>A-
                                                </option>
                                                <option {{ old('patient_blood_group') == 'B+' ? 'selected' : '' }}>B+
                                                </option>
                                                <option {{ old('patient_blood_group') == 'B-' ? 'selected' : '' }}>B-
                                                </option>
                                                <option {{ old('patient_blood_group') == 'O+' ? 'selected' : '' }}>O+
                                                </option>
                                                <option {{ old('patient_blood_group') == 'O-' ? 'selected' : '' }}>O-
                                                </option>
                                                <option {{ old('patient_blood_group') == 'AB+' ? 'selected' : '' }}>AB+
                                                </option>
                                                <option {{ old('patient_blood_group') == 'AB-' ? 'selected' : '' }}>AB-
                                                </option>
                                            </select>
                                        </div>
                                        @error('patient_blood_group')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Disease/Disorder/Sickness <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="patient_disease"
                                                value="{{ old('patient_disease') }}">
                                        </div>
                                        @error('patient_disease')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- custom part end --}}
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="patient_address"
                                                value="{{ old('patient_address') }}">
                                        </div>
                                        @error('patient_address')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Country/City</label>
                                            <select class="form-control select" name="patient_city">
                                                <option value="">Select Option</option>
                                                <option {{ old('patient_city') == 'Dhaka' ? 'selected' : '' }}>Dhaka
                                                </option>
                                                <option {{ old('patient_city') == 'Rajshahi' ? 'selected' : '' }}>Rajshahi
                                                </option>
                                                <option {{ old('patient_city') == 'Chattogram' ? 'selected' : '' }}>
                                                    Chattogram</option>
                                                <option {{ old('patient_city') == 'Khulna' ? 'selected' : '' }}>Khulna
                                                </option>
                                                <option {{ old('patient_city') == 'Barishal' ? 'selected' : '' }}>Barishal
                                                </option>
                                                <option {{ old('patient_city') == 'Rangpur' ? 'selected' : '' }}>Rangpur
                                                </option>
                                                <option {{ old('patient_city') == 'Mymensingh' ? 'selected' : '' }}>
                                                    Mymensingh</option>
                                                <option {{ old('patient_city') == 'Sylhet' ? 'selected' : '' }}>Sylhet
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="patient_phone"
                                                value="{{ old('patient_phone') }}">
                                        </div>
                                        @error('patient_phone')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Avatar <span class="text-danger">*</span></label>
                                    <div class="profile-upload">
                                        <div class="upload-img">
                                            <img alt="" src="{{ asset('contents/admin') }}/img/user.jpg">
                                        </div>
                                        <div class="upload-input">
                                            <input type="file" class="form-control" name="patient_photo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="display-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="patient_status" id="patient_active"
                                    value="Urgent: not life threatening" checked
                                    {{ old('patient_status') == 'Urgent: not life threatening' ? 'checked' : '' }}>
                                <label class="form-check-label" for="patient_active">
                                    Urgent: not life threatening
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="patient_status"
                                    id="patient_inactive" value="Emergency: could become life threatening"
                                    {{ old('patient_status') == 'Emergency: could become life threatening' ? 'checked' : '' }}>
                                <label class="form-check-label" for="patient_inactive">
                                    Emergency: could become life threatening
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="patient_status"
                                    id="patient_inactive" value="Immediate: life threatening"
                                    {{ old('patient_status') == 'Immediate: life threatening' ? 'checked' : '' }}>
                                <label class="form-check-label" for="patient_inactive">
                                    Immediate: life threatening
                                </label>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn" type="submit">Create Patient</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- main content part end --}}

    <script src="{{ asset('contents/admin') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/popper.min.js"></script>
    {{-- <script src="{{asset('contents/admin')}}/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('contents/admin') }}/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('contents/admin') }}/js/select2.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/moment.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/app.js"></script>
    <script src="{{ asset('contents/admin') }}/js/custom.js"></script>
@endsection
