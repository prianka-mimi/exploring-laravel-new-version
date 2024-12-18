@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('contents/admin') }}/css/style.css">

    {{-- main content part start --}}
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">All User</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('user-add') }}" class="btn btn btn-primary btn-rounded float-right mx-2" style="background:#F3605D;"><i
                            class="fa fa-key"></i> Role Management</a>
                    <a href="{{ route('user-add') }}" class="btn btn btn-primary btn-rounded float-right"><i
                            class="fa fa-plus"></i> Add User</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-border table-striped table-hover custom-table datatable mb-0 shadow">
                            <thead>
                                <tr class="table-primary">
                                    <th>Name</th>
                                    <th>Userame</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><img width="28" height="28"
                                                src="{{ asset('contents/admin') }}/img/user.jpg"
                                                class="rounded-circle m-r-5" alt="">{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ ($user->roleInfo->role_name) }}</td>
                                        <td class="text-right">
                                            {{-- <a href="{{route('patients-view',['patient_slug'=>$patient->patient_slug])}}" class="text-success font-18 mx-1" title="View"><i class="fa fa-eye"></i></a> --}}
                                            <a href="#" class="text-success font-18 mx-1" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="text-info font-18 mx-1" title="Edit"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a href="#" class="text-danger font-18 mx-1" data-toggle="modal"
                                                data-target="#delete_patient" title="Remove"><i
                                                    class="fa fa-trash-o"></i></a>
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
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="{{ asset('contents/admin') }}/img/sent.png" alt="" width="50" height="46">
                    <h3>Are you sure want to delete this User?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- main content part end --}}

    <script src="{{ asset('contents/admin') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/popper.min.js"></script>
    {{-- <script src="{{ asset('contents/admin') }}/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('contents/admin') }}/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('contents/admin') }}/js/select2.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/moment.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('contents/admin') }}/js/app.js"></script>
@endsection
