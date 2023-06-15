@extends('backend.layout.main')
@push('title')
    <title>Add User</title>
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
                <h5 class="mb-0">Add User</h5>
                <small class="text-muted float-end">
                  <a href="{{ route('admin.user.view') }}" class="btn btn-info">View</a>
                </small>
              </div>
              <div class="card-body">
                <form method="POST" id="permissionRequest">
                  @csrf
                  <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="basic-default-fullname">User Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter name" required value="{{ $data->name }}">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="basic-default-fullname">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="enter email" required value="{{ $data->email }}">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="basic-default-fullname">Role Type</label>
                    <select name="role_type" id="role_type" required class="form-control">
                        <option value="">Select</option>
                        @foreach ($activeRole as $role)
                            @if ($data->role_id==$role->role_id)
                                <option value="{{ $role->role_id }}" selected>{{ $role->name }}</option>
                            @else
                                <option value="{{ $role->role_id }}">{{ $role->name }}</option>
                            @endif
                        @endforeach
                    </select>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="basic-default-fullname">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="enter password" required value="{{ decryptPassword($data->password) }}">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Status</label>
                    <select class="form-control" name="status" id="status" required>
                      <option value="">Select</option>
                      <option value="1" {{ $data->status=="1"?"selected":"" }}>Active</option>
                      <option value="0" {{ $data->status=="0"?"selected":"" }}>Deactive</option>
                    </select>
                  </div>

                  <div class="mb-3 d-flex justify-content-center mt-5">
                    <input type="hidden" name="id" value="{{ $data->id }}">
                   <button type="submit" id="submit" onclick="requestSend($('#permissionRequest'),'{{route('admin.user.update')}}')" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    sidebarSelectMaintain("user-menu","add-user");
</script>
@endsection()
