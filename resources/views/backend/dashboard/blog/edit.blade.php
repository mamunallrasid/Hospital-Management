@extends('backend.layout.main')
@push('title')
    <title>Update Blog</title>
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
                <h5 class="mb-0">Update Blogs</h5>
                <small class="text-muted float-end">
                  <a href="{{ route('admin.blog.view') }}" class="btn btn-info">View</a>
                </small>
              </div>
              <div class="card-body">
                <form method="POST" id="blogRequest">
                  @csrf
                  <div class="row">
                  <div class="mb-3 col-md-9">
                    <label class="form-label" for="basic-default-fullname">Name</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog titles" value="{{ $data->title }}" required>
                  </div>
                   <div class="mb-3 col-md-3">
                    <label class="form-label" for="basic-default-company">Category</label>
                    <select class="form-control" name="category" id="category" required>
                      <option value="">Select</option>
                        @foreach ($category as $item)
                            @if($item->category_id == $data->category_id)
                                <option value="{{ $item->category_id }}" selected>{{$item->name}}</option>
                            @else
                                <option value="{{ $item->category_id }}">{{$item->name}}</option>
                            @endif
                        @endforeach
                    </select>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-fullname">Short Description</label>
                    <textarea class="form-control" id="short_description" name="short_description" required>
                        {{ $data->short_description }}
                    </textarea>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-fullname">Long Description</label>
                    <textarea class="form-control" id="long_description" name="long_description" required>
                        {{ $data->long_description }}
                    </textarea>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-company">Status</label>
                    <select class="form-control" name="status" id="status" required>
                      <option value="">Select</option>
                      <option value="1" {{ $data->status=="1"?"selected":"" }}>Active</option>
                      <option value="0" {{ $data->status=="0"?"selected":"" }}>Deactive</option>
                    </select>
                  </div>
                  <div class="mb-3 d-flex justify-content-center mt-5">
                    <input type="hidden" name="id" value="{{ $data->id }}" />
                   <button type="submit" id="submit" onclick="requestSend($('#blogRequest'),'{{route('admin.blog.update')}}')" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
