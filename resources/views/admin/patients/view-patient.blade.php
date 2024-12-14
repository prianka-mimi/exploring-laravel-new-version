@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <h4 class="page-title">Patient Profile</h4>
                </div>

                <div class="col-sm-5 col-6 text-right m-b-30">
                    {{-- <a href="{{ route('patients') }}" class="btn btn btn-primary btn-rounded float-right mx-2"><i
                            class="fa fa-wheelchair"></i> All Patient</a> --}}
                    <a href="{{ route('patients') }}" class="btn btn btn-primary btn-rounded float-right mx-2"><i class="fa fa-arrow-left"></i> Back</a>
                    <a href="edit-profile.html" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit
                        Profile</a>
                </div>
            </div>
            <div class="card-box profile-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="float-left">
                                <div class="profile-img">
                                    <a href="#"><img class="avatar"
                                            src="{{ asset('contents/admin') }}/img/doctor-03.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <h3 class="user-name m-t-0 mb-0">{{ $viewPatient->patient_first_name }}
                                                {{ $viewPatient->patient_last_name }}</h3>
                                            <div class="staff-id">Patient ID : {{ $viewPatient->patient_serial_number }}
                                            </div>
                                            <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send
                                                    Message</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-tabs">
                <div class="tab-content">
                    <div class="tab-pane show active" id="about-cont">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h3 class="card-title">Basic Informations</h3>
                                    <div class="experience-box">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">First Name:</span>
                                                <span class="text">{{ $viewPatient->patient_first_name }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Last Name:</span>
                                                <span class="text">{{ $viewPatient->patient_last_name }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Username:</span>
                                                <span class="text">{{ $viewPatient->patient_username }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Phone:</span>
                                                <span class="text"><a href="tel:+" target="_blank">+0
                                                        {{ $viewPatient->patient_phone }}</a></span>
                                            </li>
                                            <li>
                                                <span class="title">Email:</span>
                                                <span class="text"><a href="mailto:"
                                                        target="_blank">{{ $viewPatient->patient_email }}</a></span>
                                            </li>
                                            <li>
                                                <span class="title">Birthday:</span>
                                                <span class="text">
                                                    {{-- Calculate age --}}
                                                    @php
                                                        // $dob = new DateTime($viewPatient->patient_date_of_birth);
                                                        $dob = DateTime::createFromFormat(
                                                            'd/m/Y',
                                                            $viewPatient->patient_date_of_birth,
                                                        );
                                                        $now = new DateTime();
                                                        $age = $dob->diff($now)->y;
                                                    @endphp

                                                    {{-- Output age --}}
                                                    {{ $age }} years | {{ $viewPatient->patient_date_of_birth }}
                                                </span>
                                            </li>
                                            <li>
                                                <span class="title">Gender:</span>
                                                <span class="text">{{ $viewPatient->patient_gender }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Address (Country/City):</span>
                                                <span class="text">{{ $viewPatient->patient_address }}
                                                    @if ($viewPatient->patient_city != '')
                                                        ( {{ $viewPatient->patient_city }} )
                                                    @else
                                                    @endif
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-box">
                                    <h3 class="card-title">Medical Informations</h3>
                                    <div class="experience-box">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">Blood Group:</span>
                                                <span class="text">{{ $viewPatient->patient_blood_group }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Department:</span>
                                                <span class="text">{{ $viewPatient->patient_department }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Disease/Disorder/Sickness:</span>
                                                <span class="text">{{ $viewPatient->patient_disease }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Status:</span>
                                                <span class="text">{{ $viewPatient->patient_status }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-box">
                                    <h3 class="card-title">Create & Update Informations</h3>
                                    <div class="experience-box">
                                        <ul class="personal-info">
                                            <li>
                                                <span class="title">Creator:</span>
                                                <span class="text">{{ $viewPatient->patient_creator }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Upload Time:</span>
                                                <span
                                                    class="text">{{ $viewPatient->created_at->format('d-M-Y | D | h:i:s A') }}</span>
                                            </li>
                                            <li>
                                                <span class="title">Editor:</span>
                                                <span class="text">
                                                    @if ($viewPatient->patient_editor != '')
                                                        {{ $viewPatient->patient_editor }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </span>
                                            </li>
                                            <li>
                                                <span class="title">Edit Time:</span>
                                                <span class="text">
                                                    @if ($viewPatient->patient_edited_at != '')
                                                        {{ $viewPatient->created_at->format('d-M-Y | D | h:i:s A') }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-box mb-0">
                                    <h3 class="card-title">Consultant History</h3>
                                    <div class="experience-box">
                                        <ul class="experience-list">
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">Consultant Gynecologist</a>
                                                        <span class="time">Jan 2014 - Present (4 years 8 months)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">Consultant Gynecologist</a>
                                                        <span class="time">Jan 2009 - Present (6 years 1 month)</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="experience-user">
                                                    <div class="before-circle"></div>
                                                </div>
                                                <div class="experience-content">
                                                    <div class="timeline-content">
                                                        <a href="#/" class="name">Consultant Gynecologist</a>
                                                        <span class="time">Jan 2004 - Present (5 years 2 months)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
