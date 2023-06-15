@extends('backend.layout.main')
@push('title')
    <title>Add Sub Category</title>
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
                <h5 class="mb-0">Add Sub Catgory</h5>
                <small class="text-muted float-end">
                  <a href="{{ route('admin.sub-category.view') }}" class="btn btn-info">View</a>
                </small>
              </div>
              <div class="card-body">
                <form method="POST" id="subcategoryRequest">
                  @csrf
                  <div class="row">
                  <div class="mb-3 col-md-4">
                    <label class="form-label" for="basic-default-fullname">Sub Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter sub category name" required>
                  </div>
                  <div class="mb-3 col-md-4">
                    <label class="form-label" for="basic-default-company">Category</label>
                    <select class="form-control" name="category" id="category" required>
                      <option value="">Select</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->category_id }}">{{$item->name}}</option>
                        @endforeach
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

                  <div class="mb-3 d-flex justify-content-center mt-5">
                   <button type="submit" id="submit" onclick="requestSend($('#subcategoryRequest'),'{{route('admin.sub-category.store')}}')" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    sidebarSelectMaintain("sub-category-menu","add-sub-category");
</script>
@endsection()
