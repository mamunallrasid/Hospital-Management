@extends('backend.layout.main')
@push('title')
    <title>Add Role</title>
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
                <h5 class="mb-0">Add Role</h5>
                <small class="text-muted float-end">
                  <a href="{{ route('admin.role.view') }}" class="btn btn-info">View</a>
                </small>
              </div>
              <div class="card-body">
                <form method="POST" id="roleRequest">
                  @csrf
                  <div class="row">
                  <div class="mb-3 col-md-4">
                    <label class="form-label" for="basic-default-fullname">Role Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter role type" onkeyup="$('#slug').val(this.value.toLowerCase())" required>
                  </div>
                  <div class="mb-3 col-md-4 d-none">
                    <label class="form-label" for="basic-default-fullname">Role Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="enter role slug" required>
                  </div>
                  <div class="mb-3 col-md-4">
                    <label class="form-label" for="basic-default-company">Permission</label>
                    <select class="form-control" name="permission_type" id="permission"  onchange="permissionCheck(this.value)" required>
                      <option value="">Select</option>
                      <option value="1">All</option>
                      <option value="0">Custom</option>
                    </select>
                  </div>
                  <div class="mb-3 col-md-4">
                    <label class="form-label" for="basic-default-company">Status</label>
                    <select class="form-control" name="status" id="status" required>
                      <option value="">Select</option>
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                  </div>
                  <div class="mb-3 col-md-12 d-none" id="permission_list">
                    <label class="form-label" for="basic-default-fullname">Select Permission</label>
                    <table class="table table-responsive datatable" style="border: 1px solid lightgray;">
                        <thead>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Page</th>
                            <th>Menu</th>
                            <th>Slug</th>
                        </thead>
                        <tbody>
                            @foreach ($activePermission as $permission)
                                <tr for="select_all">
                                    <td><input type="checkbox" class="case" name="permission_id[]" value="{{ $permission->permission_id }}"></td>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->menu }}</td>
                                    <td><span class="badge bg-success">{{ $permission->slug }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                  </div>

                  <div class="mb-3 d-flex justify-content-center mt-5">
                   <button type="submit" id="submit" onclick="requestSend($('#roleRequest'),'{{route('admin.role.store')}}')" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    sidebarSelectMaintain("role-menu","add-role");
    function permissionCheck(permission){
        if(permission=='0'){
            $('#permission_list').removeClass('d-none');
        }
        else{
            $('#permission_list').addClass('d-none');
        }
    }
</script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.datatable').DataTable({
            "columnDefs": [ {
                'targets': 0,
                'searchable': false,
                'orderable': false,

            } ],
            "paging": false
        });

        $("#selectAll").click(function () {
            var checkAll = $("#selectAll").prop('checked');
                if (checkAll) {
                    $(".case").prop("checked", true);
                } else {
                    $(".case").prop("checked", false);
                }
            });

        $(".case").click(function(){
            if($(".case").length == $(".case:checked").length) {
                $("#selectAll").prop("checked", true);
            } else {
                $("#selectAll").prop("checked", false);
            }

        });
    } );




</script>
@endsection()
