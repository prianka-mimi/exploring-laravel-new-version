<x-custom-button>
    <!-- Button trigger modal -->
    <button type="button" class="button-37" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
            class="fa-solid fa-user-plus"></i> Add Patient</button>

    <!-- Modal -->
    <form method="post" action="{{ url('patients/add') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Patient Information</h1>
                    </div>
                    <div class="modal-body text-start">

                        {{-- main content part start --}}
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputAddress"
                                    placeholder="Enter Your Name" name="name">
                            </div>

                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4"
                                    placeholder="Enter Your Email" name="email">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Date of birth</label>
                                <input type="date" class="form-control" id="inputEmail4" name="date_of_birth">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Gender</label>
                                <select class="form-select" aria-label="Default select example" name="gender">
                                    <option selected>Male</option>
                                    <option selected>Female</option>
                                    <option selected>Custom</option>
                                    <option selected>Select menu</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Department</label>
                                <select class="form-select" aria-label="Default select example" name="department">
                                    <option selected>Psychiatrists </option>
                                    <option selected>Cardiology</option>
                                    <option selected>Gastroenterology</option>
                                    <option selected>Surgeon</option>
                                    <option selected>Cardiologists</option>
                                    <option selected>Orthopedist</option>
                                    <option selected>Dermatology</option>
                                    <option selected>Emergency Medicine</option>
                                    <option selected>Select menu</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Blood Group</label>
                                <select class="form-select" aria-label="Default select example" name="blood_group">
                                    <option selected>O +</option>
                                    <option selected>O -</option>
                                    <option selected>A +</option>
                                    <option selected>A -</option>
                                    <option selected>B +</option>
                                    <option selected>B -</option>
                                    <option selected>AB +</option>
                                    <option selected>AB -</option>
                                    <option selected>Select menu</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                                    name="address">
                            </div>
                            <div class="col-12">
                                <style>
                                    [type=text],
                                    input:where(:not([type])),
                                    [type=email],
                                    [type=url],
                                    [type=password],
                                    [type=number],
                                    [type=date],
                                    [type=datetime-local],
                                    [type=month],
                                    [type=search],
                                    [type=tel],
                                    [type=time],
                                    [type=week],
                                    [multiple],
                                    textarea,
                                    select {
                                        border-color: #dee2e6;
                                        border-radius: 6px;
                                    }
                                </style>
                                <label for="inputAddress2" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="inputGroupFile02" name="image">
                            </div>
                        </div>
                        {{-- main content part end --}}

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success button-37">Save</button>
                        <button type="button" class="btn btn-secondary button-44"
                            data-bs-dismiss="modal">Cancle</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-custom-button>
