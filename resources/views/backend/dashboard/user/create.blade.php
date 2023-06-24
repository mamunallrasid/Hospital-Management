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
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="enter name" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-default-fullname">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="enter email" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-default-fullname">Role Type</label>
                                        <select name="role_type" id="role_type" required class="form-control">
                                            <option value="">Select</option>
                                            @foreach ($activeRole as $role)
                                                <option value="{{ $role->role_id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-default-fullname">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="enter password" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="basic-default-company">Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="">Select</option>
                                            <option value="1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 d-flex justify-content-center mt-5">
                                        <button type="submit" id="submit"
                                            onclick="requestSend($('#permissionRequest'),'{{ route('admin.user.store') }}')"
                                            name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
        sidebarSelectMaintain("user-menu", "add-user");
    </script>
@endsection()
