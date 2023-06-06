@extends('backend.index')
@section('main')

<div class="col-12">


<form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card">
      <div class="card-header">
        <h4>Add Customer </h4>
      </div>
      <div class="card-body">
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Customer Name</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" name="name" class="form-control">
          </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="email" class="form-control">
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
            <div class="col-sm-12 col-md-7">
              <input type="tel" name="phone" class="form-control">
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">image</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="image" class="form-control">
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" name="address" class="form-control">
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
