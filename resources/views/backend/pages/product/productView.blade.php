@extends('backend.index')

@section('main')

<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active list-group-item list-group-item-success">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Cycle Name: {{ $CycleDetails->name }}</h5>
      <small>{{ $CycleDetails->created_at->diffForHumans() }}</small>
    </div>
    <p>Price: {{ $CycleDetails->price }} BDT</p>
    <img width="100px" height="100px" src="{{ url('/uploads/uploads/'.$CycleDetails->image) }}" alt=""><br>

    <p>Cycle Details: {{ $CycleDetails->description }}</p>
  </a>

  @endsection



