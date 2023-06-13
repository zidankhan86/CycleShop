


@extends('backend.index')

@section('main')

<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Product List</h4>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Sl</th>
              <th>Image</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Stock</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>


            @foreach ($cycles as $cycle)



            <tr>
              <th scope="row">{{ $cycle->id }}</th>
              <td><img width="50px" height="50px" src="{{ url('/uploads/uploads/'.$cycle->image) }}" alt=""></td>
              <td>{{ $cycle->name }}</td>
              <td>{{ $cycle->price }}</td>
              <td>{{ $cycle->stock }}</td>
              <td>{{ $cycle->status }}</td>
              <th>
                <a href="" class="btn btn-danger">View</a>
                <a href="{{ route('product.Edit',$cycle->id) }}" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </th>
            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </div>

  </div>





  @endsection
