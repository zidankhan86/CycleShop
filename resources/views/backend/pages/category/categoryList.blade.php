


@extends('backend.index')

@section('main')

<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Simple</h4>
      </div>

    </div>
    <div class="card">

      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Category Name</th>
              <th scope="col">Type</th>
              <th scope="col">Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

@foreach ($categories as $category)


            <tr>
              <th scope="row">{{  $category->id }}</th>
              <td>{{  $category->name }}</td>
              <td>{{  $category->type }}</td>
              <td>{{  $category->description }}</td>
              <td> <a class="btn btn-success" href="">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>

              </td>
            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>





  @endsection
