<x-custom-button>
    @php
        $patient = App\Models\Patients::firstOrFail();
        $patients = App\Models\Patients::get();
    @endphp

    <!-- Button trigger modal -->
    {{ $slot }}

    @foreach ($patients as $patient)
        <!-- Modal -->
        <div class="modal fade" id="viewModal{{ $patient->patient_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">View Patient Information</h1>
                    </div>
                    <div class="modal-body text-start">

                        {{-- main content part start --}}
                        <div class="row">
                            <div class="col-4">
                                @if ($patient->patient_image != '')
                                    <img class="img-fluid"
                                        src="{{ asset('uploads/patient/' . $patient->patient_image) }}"
                                        alt="Patient Image">
                                @else
                                    <img class="img-fluid" src="{{ asset('contents/admin/img/avatar.png') }}"
                                        alt="Patient Image">
                                @endif

                                <table class="table table-striped table-hover card table-bordered mt-2">
                                    <tr>
                                        <th class="table-success">Name</th>
                                        <td>{{ $patient->patient_name }}</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-8">
                                <table class="table table-striped table-hover card table-bordered">
                                    <tr>
                                        <th class="table-success">Email</th>
                                        <td>{{ $patient->patient_email }}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-success">Date of Birth</th>
                                        <td>
                                            {{-- Calculate age --}}
                                            @php
                                                $dob = new DateTime($patient->date_of_birth);
                                                $now = new DateTime($patient->patient_dob);
                                                $age = $dob->diff($now)->y;
                                            @endphp

                                            {{-- Output age --}}
                                            {{ $age }} years
                                            ({{ $patient->patient_dob }})
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="table-success">Gender</th>
                                        <td>{{ $patient->patient_gender }}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-success">Department</th>
                                        <td>{{ $patient->patient_department }}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-success">Blood Group</th>
                                        <td>{{ $patient->patient_blood_group }}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-success">Address</th>
                                        <td>{{ $patient->patient_address }}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-success">Creator</th>
                                        <td>{{ $patient->patient_creator }}</td>
                                    </tr>
                                    <tr>
                                        <th class="table-success">Added At</th>
                                        <td>{{ $patient->created_at->format('d-M-y | D | h:i:s A') }}</td>
                                    </tr>

                                    @if ($patient->updated_at != '')
                                        <tr>
                                            <th class="table-success">Editor</th>
                                            <td>{{ $patient->patient_creator }}</td>
                                        </tr>
                                        <tr>
                                            <th class="table-success">Edited At</th>
                                            <td>{{ $patient->updated_at->format('d-M-y | D | h:i:s A') }}</td>
                                        </tr>
                                    @else
                                    @endif
                                </table>
                            </div>
                        </div>
                        {{-- main content part end --}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary button-44"
                            data-bs-dismiss="modal">Cancle</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-custom-button>
