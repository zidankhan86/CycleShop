@extends('backend.index')
@section('main')

<div class="col-12">


<form action="{{route ('category.create') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card">
      <div class="card-header">
        <h4>Add Category </h4>
      </div>
      <div class="card-body">
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" name="name" class="form-control">
          </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Type</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="type" class="form-control">
            </div>
          </div>
        <div class="form-group row mb-4">
          <label for="description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
          <div class="col-sm-12 col-md-7">

            <textarea name="description" rows="5" cols="33">

                This is the default comment...
              </textarea>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
          <div class="col-sm-12 col-md-7">
            <button type="submit" class="btn btn-primary">Publish</button>
          </div>
        </div>
      </div>
    </div>

</form>

  </div>


@endsection
