@extends('backend.index')
@section('main')

<div class="col-12 col-md-12 col-lg-12">
    <form action="{{route ('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="card">
      <div class="card-header">
        <h4>Add Cycle</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Cycle Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Enter Price</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                $
              </div>
            </div>
            <input type="number" name="price" class="form-control phone-number">
          </div>
        </div>

        <div class="form-group">
          <label>Description</label>
          <input type="text" name="description" class="form-control purchase-code" placeholder="">
        </div>
        <div class="form-group">
          <label>Stock</label>
          <input type="number" name="stock" class="form-control invoice-input">
        </div>

        <div class="form-group">
            <label>Category Type</label>


            <select name="category_id" id="" class="form-control">

                @foreach ($categories as $category)

                <option value="{{$category->id}}">{{$category->name}}</option>

                @endforeach

            </select>
          </div>

        <div class="form-group">
          <label>Enter Image</label>
          <input type="file" name="image" class="form-control ">
        </div>
        <div class="form-group">

          <input type="hidden" name="status" class="form-control inputtags">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </div>
</form>

  </div>



@endsection

