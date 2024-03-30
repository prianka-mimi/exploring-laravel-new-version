<x-app-layout>
    <x-slot name="header">
        <style>
            .custom_height{
                padding: 16px 0!important;
            }
        </style>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-2">
                    {{ __('Patients Information') }}
                </h2>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6 text-end leading-tight">
                <x-custom-add-modal></x-custom-add-modal>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <center><span class="font-semibold">{{ __("Successfully logged in ! ") }}</span><span class="fs-5 fst-italic text-success">{{Auth::User()->name}}</span></center> --}}
                    <table class="table table-striped table-hover card">
                        <thead class="table-success">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Department</th>
                                <th scope="col">Email</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $patient->patient_name }}</td>
                                    <td>{{ $patient->patient_dob }}</td>
                                    <td>{{ $patient->patient_gender }}</td>
                                    <td>{{ $patient->patient_department }}</td>
                                    <td>{{ $patient->patient_email }}</td>
                                    <td>
                                        <ul class="d-flex justify-content-center align-items-center">
                                            <li class="btn btn-secondary mx-2"><a href="#"><i
                                                        class="fa-solid fa-eye"></i></a></li>
                                            <li class="btn btn-success mx-2"><a href="#"><i
                                                        class="fa-solid fa-user-pen"></i></a></li>
                                            <li class="btn btn-danger mx-2"><a href="#"><i
                                                        class="fa-solid fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
