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
            color: #F3605D;
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
                    <h4 class="page-title">Add User</h4>
                    <a href="{{ route('user') }}" class="btn btn btn-primary btn-rounded float-right m-b-20"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('user-store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="name"
                                        value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username"
                                        value="{{ old('username') }}">
                                </div>
                                @error('username')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group position-relative">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="password"
                                        value="{{ old('password') }}" id="custom_password1">
                                    <i class="fa fa-eye position-absolute"
                                        style="top: 60%; right: 5%; cursor:pointer;" onclick="togglePassword1()"></i>
                                </div>
                                @error('password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group position-relative">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="confirm_password"
                                        value="{{ old('confirm_password') }}" id="custom_password2">
                                    <i class="fa fa-eye position-absolute"
                                        style="top: 60%; right: 5%; cursor:pointer;" onclick="togglePassword2()"></i>
                                </div>
                                @error('confirm_password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth <span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="Day/Month/Year"
                                            name="date_of_birth" value="{{ old('date_of_birth') }}">
                                    </div>
                                </div>
                                @error('date_of_birth')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label class="gen-label">Gender <span class="text-danger">*</span></label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" value="Male"
                                                class="form-check-input"
                                                {{ old('gender') == 'Male' ? 'checked' : '' }}>Male
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" value="Female"
                                                class="form-check-input"
                                                {{ old('gender') == 'Female' ? 'checked' : '' }}>Female
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" value="Others"
                                                class="form-check-input"
                                                {{ old('gender') == 'Others' ? 'checked' : '' }}>Others
                                        </label>
                                    </div>
                                </div>
                                @error('gender')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- custom part start --}}
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Role <span class="text-danger">*</span></label>
                                            <select class="form-control select" name="role">
                                                <option value="">Select Role</option>
                                                <option value="1"
                                                    {{ old('role') == '1' ? 'selected' : '' }}>
                                                    Administrator </option>
                                                <option value="2"
                                                    {{ old('role') == '2' ? 'selected' : '' }}>
                                                    Management</option>
                                                <option value="3"
                                                    {{ old('role') == '3' ? 'selected' : '' }}>
                                                    Doctor</option>
                                                <option value="4" {{ old('role') == '4' ? 'selected' : '' }}>
                                                    Nurse</option>
                                                <option value="5" {{ old('role') == '5' ? 'selected' : '' }}>
                                                    Laboratorist</option>
                                                <option value="6" {{ old('role') == '6' ? 'selected' : '' }}>
                                                    Pharmacist</option>
                                                <option value="7" {{ old('role') == '7' ? 'selected' : '' }}>
                                                    Accountant</option>
                                                <option value="8" {{ old('role') == '8' ? 'selected' : '' }}>
                                                    Receptionist</option>
                                                <option value="9"
                                                    {{ old('role') == '9' ? 'selected' : '' }}>
                                                    Patient</option>
                                            </select>
                                        </div>
                                        @error('role')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Blood Group <span class="text-danger">*</span></label>
                                            <select class="form-control select" name="blood_group">
                                                <option value="">Select Blood Group</option>
                                                <option {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+
                                                </option>
                                                <option {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-
                                                </option>
                                                <option {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+
                                                </option>
                                                <option {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-
                                                </option>
                                                <option {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+
                                                </option>
                                                <option {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-
                                                </option>
                                                <option {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+
                                                </option>
                                                <option {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-
                                                </option>
                                            </select>
                                        </div>
                                        @error('blood_group')
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
                                            <input type="text" class="form-control" name="address"
                                                value="{{ old('address') }}">
                                        </div>
                                        @error('address')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Country/City</label>
                                            <select class="form-control select" name="city">
                                                <option value="">Select Option</option>
                                                <option {{ old('city') == 'Dhaka' ? 'selected' : '' }}>Dhaka
                                                </option>
                                                <option {{ old('city') == 'Rajshahi' ? 'selected' : '' }}>Rajshahi
                                                </option>
                                                <option {{ old('city') == 'Chattogram' ? 'selected' : '' }}>
                                                    Chattogram</option>
                                                <option {{ old('city') == 'Khulna' ? 'selected' : '' }}>Khulna
                                                </option>
                                                <option {{ old('city') == 'Barishal' ? 'selected' : '' }}>Barishal
                                                </option>
                                                <option {{ old('city') == 'Rangpur' ? 'selected' : '' }}>Rangpur
                                                </option>
                                                <option {{ old('city') == 'Mymensingh' ? 'selected' : '' }}>
                                                    Mymensingh</option>
                                                <option {{ old('city') == 'Sylhet' ? 'selected' : '' }}>Sylhet
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="phone"
                                                value="{{ old('phone') }}">
                                        </div>
                                        @error('phone')
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
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn" type="submit">Create User</button>
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
