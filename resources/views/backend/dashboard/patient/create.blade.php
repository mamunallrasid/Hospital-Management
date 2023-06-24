@extends('backend.layout.main')
@push('title')
    <title>Add Patient</title>
@endpush
@section('main-content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">



            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add Patient</h5>
                            <small class="text-muted float-end">
                                <a href="{{ route('admin.patient.view') }}" class="btn btn-info">View</a>
                            </small>
                        </div>
                        <div class="card-body">
                            <form method="POST" id="patientRequest">
                                @csrf
                                <div class="row border m-1">
                                    <h6 class="border-bottom p-2">Patient details:-</h6>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-default-company">Form Type</label>
                                        <select class="form-control" name="form_type" id="form_type" required>
                                            <option value="">Select</option>
                                            <option value="Delivery">Delivery</option>
                                            <option value="Surgery">Surgery</option>
                                            <option value="ICU/NICU/HDU">ICU/NICU/HDU</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-default-fullname">Patient Reg No</label>
                                        <input type="text" class="form-control" id="reg_no" name="reg_no"
                                            placeholder="Enter reg no" required>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-default-fullname">Bed No</label>
                                        <input type="text" class="form-control" id="bed_no" name="bed_no"
                                            placeholder="Enter bed no" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-default-fullname">Patient Name</label>
                                        <input type="text" class="form-control" id="patient_name" name="patient_name"
                                            placeholder="Enter patient name" required>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-default-fullname">Age</label>
                                        <input type="number" class="form-control" id="age" name="age"
                                            placeholder="Enter age" required>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-default-company">Gender</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-default-fullname">Addmission date</label>
                                        <input type="date" class="form-control" id="admission_date" name="admission_date"
                                            required>
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <label class="form-label" for="basic-default-fullname">Addmission time</label>
                                        <input type="time" class="form-control" id="admission_time" name="admission_time"
                                            required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Aadhaar No</label>
                                        <input type="number" class="form-control" id="aadhaar_no" name="aadhaar_no"
                                            required placeholder="Enter Aadhaar no">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Father/Husband
                                            Name</label>
                                        <input type="text" class="form-control" id="guardian_name" name="guardian_name"
                                            placeholder="Enter father/husband name" required>
                                    </div>
                                    <div class="mb-3 col-md-8">
                                        <label class="form-label" for="basic-default-fullname">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Enter address" required>
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Under Doctor</label>
                                        <select class="form-control" name="under_doctor" id="under_doctor" required>
                                            <option value="">Select</option>
                                            <option value="1">Mr. Ali</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Refer Doctor 1</label>
                                        <select class="form-control" name="refer_doctor_1" id="refer_doctor_1">
                                            <option value="">Select</option>
                                            <option value="1">Mr. Ali</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Refer Doctor 2</label>
                                        <select class="form-control" name="refer_doctor_2" id="refer_doctor_2">
                                            <option value="">Select</option>
                                            <option value="1">Mr. Ali</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Phone No</label>
                                        <input type="number" class="form-control" id="phone_no" name="phone_no"
                                            placeholder="Enter Phone no" required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Alternative Phone
                                            No</label>
                                        <input type="number" class="form-control" id="alternative_phone_no"
                                            name="alternative_phone_no" placeholder="Enter alternative phone no">
                                    </div>


                                </div>
                                <div class="row border m-1">
                                    <h6 class="border-bottom p-2">Reference details:-</h6>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-company">Refer By</label>
                                        <select class="form-control" name="refer_by" id="refer_by">
                                            <option value="">Select</option>
                                            <option value="Delivery">Delivery</option>
                                            <option value="Surgery">Surgery</option>
                                            <option value="ICU/NICU/HDU">ICU/NICU/HDU</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row border m-1">
                                    <h6 class="border-bottom p-2">Payment Category:-</h6>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="basic-default-company">Payment Mode : </label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mode" id="Cash"
                                                value="Cash" required>
                                            <label class="form-check-label" for="Cash">
                                                Cash
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mode"
                                                id="Swasthyasathi" value="Swasthyasathi" required>
                                            <label class="form-check-label" for="Swasthyasathi">
                                                Swasthyasathi
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mode" id="Insurance"
                                                value="Insurance" required>
                                            <label mode class="form-check-label" for="Insurance">
                                                Insurance mode corporate
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-default-fullname">URN</label>
                                        <input type="text" class="form-control" id="urn_no" name="urn_no"
                                            placeholder="Enter URN no">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-default-fullname">Name of the Insurance
                                            Company</label>
                                        <input type="text" class="form-control" id="insurance_name"
                                            name="insurance_name" placeholder="Enter Insurance company name">
                                    </div>
                                </div>
                                <div class="row border m-1">
                                    <h6 class="border-bottom p-2">Additional:-</h6>

                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Child Doctor</label>
                                        <select class="form-control" name="anesthesis" id="anesthesis">
                                            <option value="">Select</option>
                                            <option value="1">Mr. Ali</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Anesthesis</label>
                                        <select class="form-control" name="child_doctor" id="child_doctor">
                                            <option value="">Select</option>
                                            <option value="1">Mr. Ali</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Assistant1</label>
                                        <select class="form-control" name="assistance_1" id="assistance_1">
                                            <option value="">Select</option>
                                            <option value="1">Mr. Ali</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-fullname">Assistant2</label>
                                        <select class="form-control" name="assistance_2" id="assistance_2">
                                            <option value="">Select</option>
                                            <option value="1">Mr. Ali</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row border m-1">
                                    <h6 class="border-bottom p-2">Patient Status:-</h6>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-company">Patient Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="">Select</option>
                                            <option value="1">Active Patient</option>
                                            <option value="0">Deactive Patient</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="basic-default-company">Discharge Status</label>
                                        <select class="form-control" name="discharge_status" id="discharge_status"
                                            required>
                                            <option value="0">No</option>
                                            <option value="1">Discharge Mode</option>
                                            <option value="2">Refer Mode</option>
                                            <option value="3">DORB Mode</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center mt-5">
                                        <button type="submit" id="submit"
                                            onclick="requestSend($('#patientRequest'),'{{ route('admin.patient.store') }}')"
                                            name="submit"
                                            class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>



        </div>
        <!-- / Content -->



        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection()
@section('script')
    <script>
        sidebarSelectMaintain("role-menu", "add-role");

        function permissionCheck(permission) {
            if (permission == '0') {
                $('#permission_list').removeClass('d-none');
            } else {
                $('#permission_list').addClass('d-none');
            }
        }
    </script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('.datatable').DataTable({
                "columnDefs": [{
                    'targets': 0,
                    'searchable': false,
                    'orderable': false,

                }],
                "paging": false
            });

            $("#selectAll").click(function() {
                var checkAll = $("#selectAll").prop('checked');
                if (checkAll) {
                    $(".case").prop("checked", true);
                } else {
                    $(".case").prop("checked", false);
                }
            });

            $(".case").click(function() {
                if ($(".case").length == $(".case:checked").length) {
                    $("#selectAll").prop("checked", true);
                } else {
                    $("#selectAll").prop("checked", false);
                }

            });
        });
    </script>
@endsection()
