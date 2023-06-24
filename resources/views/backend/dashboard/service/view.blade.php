@extends('backend.layout.main')
@push('title')
    <title>View Services</title>
@endpush
@section('main-content')
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="card">
          <div class="card-body">

                  <h5 class="mb-3">Display Services
                      <small class="text-muted float-end">
                          <a href="{{ route('admin.service.create') }}" class="btn btn-success">Add</a>
                          <a href="{{ url('super/patient/restore') }}" class="btn btn-warning">Restore</a> &nbsp;
                      </small>

                  </h5>

                  <div class="row mb-3">
                      <input type="hidden" name="token" id="token" value="{{csrf_token()}}">
                      <input type="hidden" name="display_url" id="display_url" value="{{ route('admin.service.display') }}">

                      <div class="form-group col-md-2 d-none">

                          <label>Row</label>
                          <select class="form-control" name="row" id="row">
                              <option value="" selected>Select All</option>
                              <option value="10">10</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                              <option value="200">200</option>
                              <option value="500">500</option>
                              <option value="1000">1000</option>

                          </select>
                      </div>
                      <div class="form-group col-md-2 d-none">
                          <label>Shop Type</label>
                          <select class="form-control" name="type" id="type">
                              <option value="">Select</option>
                              {{-- @foreach ($data as $value)
                                  <option value="{{ $value->id }}">{{ $value->shop_type }}</option>
                              @endforeach --}}
                          </select>
                      </div>
                      <div class="form-group col-md-2">
                          <label>From Date</label>
                          <input type="date" name="from_date" id="from_date" class="form-control">
                      </div>
                      <div class="form-group col-md-2">
                          <label>To Date</label>
                          <input type="date" name="to_date" id="to_date" class="form-control">
                      </div>
                      <div class="form-group col-md-2 d-none">
                          <label>Discharge Status</label>
                          <select class="form-control" name="status" id="status">
                            <option value="">Select</option>
                            <option value="0">No</option>
                            <option value="1">Discharge Mode</option>
                            <option value="2">Refer Mode</option>
                            <option value="3">DORB Mode</option>

                          </select>
                      </div>
                  </div>
                <table class="table table-striped table-bordered dataTable text-center table-sm" id="mytable" style="border: 1px solid gray;width:100%">
                   <thead>
                      <tr>
                         <th class="text-center"><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                         <th class="text-center">Service Name</th>
                         <th class="text-center">Amount</th>
                         <th class="text-center">Service Detalis</th>
                         <th class="text-center">CreatedAt</th>
                         <th class="text-center">Actions</th>
                      </tr>
                   </thead>
                   <tbody>

                   </tbody>
                </table>
              </form>


          </div>
       </div>




    </div>
    <!-- / Content -->



    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->

@endsection()
@section('script')
<script src="{{url('backend/custom-js/display/service.js')}}"></script>
<script>
    sidebarSelectMaintain("role-menu","view-role");
</script>
@endsection()
