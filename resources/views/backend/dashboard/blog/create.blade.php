@extends('backend.layout.main')
@push('title')
    <title>Add Blog</title>
@endpush
@section('main-content')
<style>
   .ck-editor__editable {
    min-height: 250px;
    }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



      <div class="row">
          <div class="col-xl">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Blog</h5>
                <small class="text-muted float-end">
                  <a href="{{ route('admin.blog.view') }}" class="btn btn-info">View</a>
                </small>
              </div>
              <div class="card-body">
                <form method="POST" id="brandRequest">
                  @csrf
                  <div class="row">
                  <div class="mb-3 col-md-9">
                    <label class="form-label" for="basic-default-fullname">Blog Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                  </div>
                  <div class="mb-3 col-md-3">
                    <label class="form-label" for="basic-default-company">Category</label>
                    <select class="form-control" name="category" id="category" required>
                      <option value="">Select</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->category_id }}">{{$item->name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-fullname">Short Description</label>
                    <textarea class="form-control" id="short_description" name="short_description" required>
                    </textarea>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-fullname">Long Description</label>
                    <textarea class="form-control" id="long_description" name="long_description" required>
                    </textarea>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="basic-default-company">Status</label>
                    <select class="form-control" name="status" id="status" required>
                      <option value="">Select</option>
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                  </div>

                  <div class="mb-3 d-flex justify-content-center mt-5">
                   <button type="submit" id="submit" onclick="requestSend($('#brandRequest'),'{{route('admin.blog.store')}}')" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    sidebarSelectMaintain("blog-menu","add-blog");
</script>
@endsection()
