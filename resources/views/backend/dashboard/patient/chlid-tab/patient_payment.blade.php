<form method="POST" id="paymentRequest">
    @csrf
    <div class="row border m-1">
        <h6 class="border-bottom p-2">Payment info:-</h6>
        <div class="mb-3 col-md-12">
            <label class="form-label" for="basic-default-company">Payment Mode : </label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mode" id="Cash" value="Cash"
                    required>
                <label class="form-check-label" for="Cash">
                    Cash
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mode" id="Swasthyasathi"
                    value="Swasthyasathi" required>
                <label class="form-check-label" for="Swasthyasathi">
                    Swasthyasathi
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="mode" id="Insurance" value="Insurance"
                    required>
                <label mode class="form-check-label" for="Insurance">
                    Insurance mode corporate
                </label>
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="basic-default-fullname">URN</label>
            <input type="text" class="form-control" id="urn_no" name="urn_no" placeholder="Enter URN no">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="basic-default-fullname">Name of the Insurance
                Company</label>
            <input type="text" class="form-control" id="insurance_name" name="insurance_name"
                placeholder="Enter Insurance company name">
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
            <select class="form-control" name="discharge_status" id="discharge_status" required>
                <option value="0">No</option>
                <option value="1">Discharge Mode</option>
                <option value="2">Refer Mode</option>
                <option value="3">DORB Mode</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-center mt-5">
            <button type="submit" id="submit"
                onclick="requestSend($('#paymentRequest'),'{{ route('admin.patient.store') }}')" name="submit"
                class="btn btn-primary waves-effect waves-light">Submit</button>
        </div>
    </div>
</form>
