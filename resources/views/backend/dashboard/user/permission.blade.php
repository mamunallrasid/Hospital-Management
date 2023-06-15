@extends('backend.layout.main')
@push('title')
    <title>User Permission</title>
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
                <h5 class="mb-0">User Permission</h5>


                <small class="text-muted float-end">
                  <a href="{{ route('admin.user.view') }}" class="btn btn-info">View</a>
                </small>
              </div>
              <div class="card-body">
                <form method="POST" id="setPermissionRequest">
                  @csrf
                  <div class="row">
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-fullname">Select Role Type</label>
                    <input type="text" name="role_id" class="form-control" readonly id="role_id" value="{{ $data->role->name }}">
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-fullname">Select Permission</label>
                    <table class="table table-responsive datatable" style="border: 1px solid lightgray;">
                        <thead>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Page</th>
                            <th>Menu</th>
                            <th>Slug</th>
                        </thead>
                        <tbody>
                            {{-- {{ getLogInUserPermission() }} --}}
                            @foreach ($activePermission as $permission)
                                @if ($data->role->all=='1')
                                    <tr for="select_all">
                                        <td><input type="checkbox" checked class="case" name="permission_id[]" value="{{ $permission->permission_id }}"></td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->menu }}</td>
                                        <td><span class="badge bg-success">{{ $permission->slug }}</span></td>
                                    </tr>
                                @else
                                 @if (in_array($permission->permission_id,$SetPermission))
                                    <tr for="select_all">
                                        <td><input type="checkbox" checked class="case" name="permission_id[]" value="{{ $permission->permission_id }}"></td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->menu }}</td>
                                        <td><span class="badge bg-success">{{ $permission->slug }}</span></td>
                                    </tr>
                                 @else
                                    <tr for="select_all">
                                        <td><input type="checkbox" class="case" name="permission_id[]" value="{{ $permission->permission_id }}"></td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->menu }}</td>
                                        <td><span class="badge bg-success">{{ $permission->slug }}</span></td>
                                    </tr>
                                 @endif
                                @endif



                            @endforeach
                        </tbody>
                    </table>

                  </div>


                  {{-- <div class="mb-3 d-flex justify-content-center mt-5">
                    <input type="hidden" name="id" value="{{ $data->id }}">
                   <button type="submit" id="submit" onclick="requestSend($('#setPermissionRequest'),'{{route('admin.user.update-permission')}}')" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                  </div> --}}
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
    sidebarSelectMaintain("set-permission-menu","add-set-permission");

</script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.datatable').DataTable({
            "columnDefs": [ {
                'targets': 0,
                'searchable': false,
                'orderable': false,
            } ]
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
