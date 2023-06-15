@extends('backend.layout.main')
@push('title')
    <title>Update Brand</title>
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
                <h5 class="mb-0">Update Brand</h5>
                <small class="text-muted float-end">
                  <a href="{{ route('admin.category.view') }}" class="btn btn-info">View</a>
                </small>
              </div>
              <div class="card-body">
                <form method="POST" id="categoryRequest">
                  @csrf
                  <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="basic-default-fullname">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter category name" value="{{ $data->name }}" required>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="basic-default-company">Status</label>
                    <select class="form-control" name="status" id="status" required>
                      <option value="">Select</option>
                      <option value="1" {{ $data->status=="1"?"selected":"" }}>Active</option>
                      <option value="0" {{ $data->status=="0"?"selected":"" }}>Deactive</option>
                    </select>
                  </div>
                  <div class="mb-3 d-flex justify-content-center mt-5">
                    <input type="hidden" name="id" value="{{ $data->category_id }}" />
                   <button type="submit" id="submit" onclick="requestSend($('#categoryRequest'),'{{route('admin.category.update')}}')" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    sidebarSelectMaintain("role-menu","view-role");
    permissionCheck({{ $data->all }});
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
